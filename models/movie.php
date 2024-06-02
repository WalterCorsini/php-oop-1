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
        $current_date = new DateTime();
        $current_date = $current_date->format('Y-m-d');
        $formatted_date = date('Y-m-d', strtotime($date));
        if($current_date > $formatted_date){
            $this->date_release = $formatted_date;
        } else {
            throw new Exception("non puoi inserire date future");
        }
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
        return "<strong>nome film: </strong>" . $this->title;
    }

    function getData() {
        return "<strong>data di uscita: </strong>" . $this->date_release;
    }

    function getVote() {
        return "<strong>voto: </strong>" . $this->vote;
    }
    function getDescription() {
        return "<strong>Trama: </strong>" . $this->description;
    }
    function getImage(){
        return $this->poster;
    }
}


?>