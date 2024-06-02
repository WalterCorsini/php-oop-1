<?php

class Actor
{
    private array $actor;

    public function __construct(string $name, string $surname)
    {
        // elimino gli spazi vuoti
        $string = $name;
        $string1 = $surname;
        $string = str_replace(" ", "", $string);
        $string1 = str_replace(" ", "", $string1);
        if (strlen($string) < 3 || strlen($string1) < 3 || !ctype_alpha($string) || !ctype_alpha($string1)) {
            throw new Exception("Accetta solo lettere dalla A - Z no numeri");
        } else {
            $this->actor[] =  "<li>" . $name . " " . $surname . "</li>";
        }
    }
    function setActor($name, $surname)
    {
        // elimino gli spazi vuoti
        $string = $name;
        $string1 = $surname;
        $string = str_replace(" ", "", $string);
        $string1 = str_replace(" ", "", $string1);
        if (strlen($string) < 3 || strlen($string1) < 3 || !ctype_alpha($string) || !ctype_alpha($string1)) {
            throw new Exception("Accetta solo lettere dalla A - Z no numeri");
        } else {
            $this->actor[] =  "<li>" . $name . " " . $surname . "</li>";
        }
    }

    function getActor()
    {
        return implode($this->actor);
    }
}
