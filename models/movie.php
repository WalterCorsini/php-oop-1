<?php


// nome clase
class Movie{
    private string $title;
    public Genre $genre;
    public Actor $actor;
    private string $poster;
    private string $date_release;
    private string $description;
    private string $vote;
    private string $castString;

    // construttore classe con titolo e genere
    public function __construct(string $title, Genre $genre, Actor $actor) {
        $title1 = str_replace(" ","",$title);
        if(!empty($title1)){
            $this->title    = $title;
        } else {
            throw new Exception("non lasciare i campi vuoti");
        }
        $this->genre        = $genre;
        $this->actor        = $actor;

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
        if(is_numeric($vote) && $vote<6 && $vote>=0){
            $this->vote = $vote . "/5";
        } else {
            throw new Exception("numeri consenti da 0 - 5");
        }
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