<?php


// nome clase
class Movie{
    private string $title;
    public Genre $genre; 
    private string $date_release;
    private string $description;
    private int $vote;

    // construttore classe con titolo e genere
    public function __construct(string $title, Genre $genre) {
        $this->title    = $title;
        $this->genre    = $genre;

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


    // stampa senza controllo
    function getTitle() {
        return "nome film: " . $this->title;
    }

    function getData() {
        return "data di uscita: " . $this->date_release;
    }

    function getVote() {
        return "voto: " . $this->vote;
        // $this->description .  
    }
    function getDescription() {
        return "Trama: " . $this->description;
    }
}


?>