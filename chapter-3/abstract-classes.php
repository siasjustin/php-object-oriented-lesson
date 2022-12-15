<?php

require_once 'Book.php';
require_once 'PhysicalBook.php';

$book = new PhysicalBook('Yesterday', 200);

print $book->getTitle() . ' ' . $book->getWeight() . PHP_EOL;