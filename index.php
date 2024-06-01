<?php 

// importo le classi 
// require_once "models/actor.php";
require_once "models/movie.php";
require_once "models/genre.php";

// film 1
$genre1 = new Genre('horror','si');
$movie1 = new Movie('ciao mamma', $genre1);
$movie1-> setData("21-11-1990");
$movie1-> setVote(2);
$movie1-> setDescription("descrizione film1");

var_dump($movie1->getTitle());
var_dump($movie1->getData());
var_dump($movie1->getVote());
var_dump($movie1->getDescription());
var_dump($movie1->genre->getGenre());
var_dump($movie1->genre->getAdultOnly());
// /film 1

// film 2
$genre2 = new Genre('commedia','no');
$movie2 = new Movie('ciao papa', $genre2);
$movie2-> setData("21-11-1990");
$movie2-> setVote(1);
$movie2-> setDescription("descrizione film2");

var_dump($movie2->getTitle());
var_dump($movie2->getData());
var_dump($movie2->getVote());
var_dump($movie2->getDescription());
var_dump($movie2->genre->getGenre());
var_dump($movie2->genre->getAdultOnly());
// /film 2

?>