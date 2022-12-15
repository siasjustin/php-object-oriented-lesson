<?php

class Song
{
    public string $name;
    public int $numberOfPlays;

    /**
     * 
     * Song rating from 0 to 5
     * half rating allowed (float) ie 3.5
     * 
     * Add logic to prevent it from being less than 0 and greater than 5
     */

    private $rating;

    public function __construct
    (
      string $name,
      int $numberOfPlays
    )
    {
      $this->name = $name;
      $this->numberOfPlays = $numberOfPlays;
     
    }

    public function setRating($rating): void
    {
      $rating = max(0, $rating);
      $this->rating = min(5, $rating);
    }
    public function getRating()
    {
      return $this->rating;
    }

    
}
 