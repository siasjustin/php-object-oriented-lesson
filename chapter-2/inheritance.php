<?php

require_once('PhysicalBook.php');
require_once('DigitalBook.php');

$physicalBook = new PhysicalBook('A random Book', 'Jane Doe', 2000, 300);
$digitalBook = new DigitalBook('A random Book', 'Jane Doe', 2000, 443434344);

print $physicalBook->getAuthor() . PHP_EOL;
print $physicalBook->print() . PHP_EOL;

print $digitalBook->getFileSize() . PHP_EOL;
print $digitalBook->print() . PHP_EOL;