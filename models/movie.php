<?php

class Movie{
    public string $title;
    public string $date_release;
    public string $description;
    public int $vote;
    public Genre $genre; 

    public function __construct(string $title, Genre $genre) {

        $this->title    = $title;
        $this->genre    = $genre;

    }
}


?>