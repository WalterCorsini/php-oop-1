<?php


// nome clase
class Movie{
    private string $title;
    public Genre $genre;
    public Actor $actor;
    private string $poster;
    private string $date_release;
    private string $description;
    private int $vote;
    private string $castString;

    // construttore classe con titolo e genere
    public function __construct(string $title, Genre $genre, Actor $actor) {
        $this->title    = $title;
        $this->genre    = $genre;
        $this->actor  = $actor;

    }

    // inserimento senza controllo
    function setData($date){
        $this->date_release = $date;
    }

    function setVote($vote){
        $this->vote = $vote;
    }
    function setDescription($description){
        $this->description = $description;
    }
    function setImage($poster){
        $this->poster= $poster;
    }

    // stampa senza controllo
    function getTitle() {
        return "nome film: " . $this->title;
    }

    function getData() {
        return "data di uscita: " . $this->date_release;
    }

    function getVote() {
        return "voto: " . $this->vote;
    }
    function getDescription() {
        return "Trama: " . $this->description;
    }
    function getImage(){
        return $this->poster;
    }
}


?>