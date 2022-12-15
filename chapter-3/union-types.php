<?php

require_once('Song.php');

$song = new Song('Yesterday', 100);


/**
 * 1) add  functionality for SETTING and GETTING the song rating
 * 2) Rating can not be set to less than 0 or more than 5
 * // if < 0 attempted, set to 0
 * // if > 5 attempted, set to 5
 */

 $song->setRating(8);

 print $song->getRating()  . PHP_EOL;