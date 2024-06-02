<?php

class Actor
{
    private array $actor;


    public function __construct(string $name, string $surname)
    {
        // elimino gli spazi vuoti e controllo che le strinche non siano numeriche e maggiore uguale a 3 caratteri
        $name1 = str_replace(" ", "", $name);
        $surname1 = str_replace(" ", "", $surname);
        if (strlen($name1) >= 3 && strlen($surname1) >= 3 && ctype_alpha($name1) && ctype_alpha($surname1)) {
            $this->actor[] =  "<li>" . $name . " " . $surname . "</li>";
        } else {
            throw new Exception("Accetta solo lettere dalla A - Z no numeri");
        }
    }
    function setActor($name, $surname)
    {
        // elimino gli spazi vuoti e controllo che le strinche non siano numeriche e maggiore uguale a 3 caratteri
        $name1 = str_replace(" ", "", $name);
        $surname1 = str_replace(" ", "", $surname);
        if (strlen($name1) >= 3 && strlen($surname1) >= 3 && ctype_alpha($name1) && ctype_alpha($surname1)) {
            $this->actor[] =  "<li>" . $name . " " . $surname . "</li>";
        } else {
            throw new Exception("Accetta solo lettere dalla A - Z no numeri");
        }
    }

    // funzione che restituisce in pagina l'array actor in modo diviso,avengo normalizzato ogni valore dell'array con i ta <li></li> ottengo in pagina una lista ordinata senza utilizzare dentro il metodo implode un carattere divisore(, . - ....)
    function getActor()
    {
        return implode($this->actor);
    }
}
