<?php

require_once 'Song.php';

$songTitles = ['Yestrerday', 'Help', 'Something'];

$song = new Song($songTitles[0], 100);

$song->name = $songTitles[1];

$song->name=['help', 'whatever'];

var_dump($song->name);