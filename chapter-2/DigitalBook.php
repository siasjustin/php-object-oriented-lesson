<?php

require_once('Book.php');

class DigitalBook extends Book
{
  public $weight;

  public function __construct(string $title, string $author, int $price, int $fileSize = 0)
  {
    parent::__construct($title, $author, $price);
    
    $this->fileSize = $fileSize;
  }

  public function getFileSize(): int{
    return $this->fileSize;
  }
  public function print(): string
  {
    return "{$this->title}, {$this->author}, fileSize: {$this->fileSize} bites";
  }


}