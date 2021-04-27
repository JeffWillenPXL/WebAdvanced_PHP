<?php namespace entities;
// naam: 

use model\ModelException;

class Message
{
    private $id;
    private $contents;


    private function __construct($id, $contents)
    {
        if ($id <= 0) {
            throw new ModelException("The value for 'id' should be bigger than 0!");
        }

        if ($contents == "") {
            throw new ModelException("'content' can't be an empty string");
        }
        $this->id = $id;
        $this->contents = $contents;
    }


    public static function make($id, $contents): self
    {
        return new self($id, $contents);
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function getContents(): string
    {
        return $this->contents;
    }
}
