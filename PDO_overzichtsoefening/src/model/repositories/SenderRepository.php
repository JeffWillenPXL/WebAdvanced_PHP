<?php namespace repositories;
// naam: 

use entities\Message;
use entities\Sender;
use model\ModelException;

class SenderRepository
{
    private $pdo;


    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getSenderById($id)
    {
        try {
            $statement = $this->pdo->prepare("SELECT sender.name, message.id, message.contents
                                        FROM sender, message
                                        WHERE sender.id = message.sender_id and sender.id=:id");

            $statement->bindParam(":id", $id);
            $statement->setFetchMode(\PDO::FETCH_ASSOC);
            $statement->execute();
            $result = $statement->fetchAll();
            if(count($result) == 0) {
                return null;
            }
            else {
                $sender = Sender::make($id, $result[0]['name']);
                foreach ($result as $row) {
                    $message = Message::make($row['id'], $row['contents']);
                    $sender->addMessage($message);
                }
                return $sender;
            }


        } catch (\PDOException $exception) {
            throw new ModelException($exception->getMessage());
        }
    }
}
