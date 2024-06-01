<?php

class Actor{
    private array $actor;

    public function __construct(string $name, string $surname) {
        $this->actor[]=  "<li>" . $name . " " .$surname . "</li>";
    }
    function setActor($name,$surname){
        $this->actor[]= "<li>". $name . " " . $surname . "</li>";
    }    
    
    function getActor(){
        return implode($this->actor);
    }
}

?>