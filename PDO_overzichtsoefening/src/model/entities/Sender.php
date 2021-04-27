<?php namespace entities;
// naam: 

use model\ModelException;

class Sender
{
    private $id;
    private $name;
    private $messages;


    private function __construct($id, $name)
    {
        if ($id <= 0) {
            throw new ModelException("The value for 'id' should be bigger than 0!");
        }

        if ($name == "") {
            throw new ModelException("'name' can't be an empty string");
        }
        $this->id = $id;
        $this->name = $name;
        $this->messages = array();
    }

    public static function make($id, $name): self
    {
        return new self($id, $name);
    }

    public function addMessage(Message $message): void
    {
        $this->messages[] = $message;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function countNumberOfMessages(): int {
        return count($this->messages);
    }

    public function getMessageByIndex(int $index): Message{
        return $this->messages[$index];
    }


}
