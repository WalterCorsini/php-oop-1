<?php


// nome clase
class Movie
{
    private string $title;
    public Genre $genre;
    public Actor $actor;
    private string $poster;
    private string $date_release;
    private string $description;
    private string $vote;

    // construttore classe con titolo e genere
    public function __construct(string $title, Genre $genre, Actor $actor)
    {
        //  elimino spazi nel per controllare se sia lasciato vuoto o meno il campo
        $title1 = str_replace(" ", "", $title);
        if (!empty($title1)) {
            $this->title    = $title;
        } else {
            throw new Exception("non lasciare i campi vuoti");
        }
        $this->genre        = $genre;
        $this->actor        = $actor;
    }

    // inserimento data
    function setData($date)
    {
        // creo data corrente e la setto nel formato anno mese giorno
        $current_date = new DateTime();
        $current_date = $current_date->format('Y-m-d');
        // formatto la data inserita dall'utente
        $formatted_date = date('Y-m-d', strtotime($date));
        //  controllo che non sia una data futura
        if ($current_date >= $formatted_date) {
            $this->date_release = date('j F Y',strtotime($formatted_date));
        } else {
            throw new Exception("non puoi inserire date future . formato gg-mm-yyyy");
        }
    }

    // inserimento voto
    function setVote($vote)
    {
        //  controllo che il valore inserito sia numerico e compreso tra 0 e 5
        if (is_numeric($vote) && $vote < 6 && $vote >= 0) {
            $this->vote = $vote . "/5";
        } else {
            throw new Exception("numeri consenti da 0 - 5");
        }
    }

    // inserisco descrizione
    function setDescription($description)
    {
        // elimino gli spazi per controllare che non sia vuoto e maggiore di almeno 20 caratteri
        $description1 = str_replace(" ", "", $description);
        if (strlen($description1) > 20) {
            $this->description = $description;
        } else {
            throw new Exception("supera i 20 caratteri");
        }
    }

    // inserimento url image
    function setImage($poster)
    {
        // controllo l'esistenza del file se esiste
        if (file_exists($poster)) {
            $this->poster = $poster;
        } else {
            throw new Exception("inserisci il percorso corretto dell'immagine");
        }
    }

    // stampa titolo
    function getTitle()
    {
        return "<strong>Nome film: </strong>" . $this->title;
    }

    // stampa data
    function getData()
    {
        return "<strong>Data di uscita: </strong>" . $this->date_release;
    }

    // stampa voto
    function getVote()
    {
        return "<strong>Voto: </strong>" . $this->vote;
    }

    // stampa descrizione
    function getDescription()
    {
        return "<strong>Trama: </strong>" . $this->description;
    }

    // stampa immagine
    function getImage()
    {
        return $this->poster;
    }
}
