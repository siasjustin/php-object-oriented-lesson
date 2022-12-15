<?php

// paramaters are what it is called when the method is declared

// arguments are when they are passed while using the method


class Playlist
{
    public $songs = [];

    public function addSong(Song $song): void
    {
      $this->songs[] = $song;
    }
    
    public function getLength(): int
    {
      return count($this->songs);
    }
}
