<?php
// naam:
require_once "vendor/autoload.php";

use repositories\SenderRepository;
use model\ModelException;
use entities\Sender;


$user = 'root';
$password = 'root';
$database = 'examenwa2019';
$server = 'localhost';
$pdo = null;
try {
    $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $password);
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    $senderRepository = new SenderRepository($pdo);
    $id = (int)$_GET['senderid'];
    $sender = $senderRepository->getSenderById($id);
    if ($sender != null) {
        print("Sender met naam " . $sender->getName() . " heeft " . $sender->countNumberOfMessages() . " berichten:");
        print("<br>");
        for($i = 0; $i < $sender->countNumberOfMessages(); $i++) {
            print($sender->getMessageByIndex($i)->getContents());
            print("<br>");
        }
    } else {
        print($id . " niet gevonden");
    }
} catch (ModelException $exception) {
    print($exception->getMessage());
}

