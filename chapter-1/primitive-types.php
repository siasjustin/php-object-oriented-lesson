<?php

// boolean

// integer

// float

// string

// object

// resource

// array

// null

declare(strict_types=1);

require_once('Song.php');
$song = new Song(222, 10000);



var_dump($song->name);