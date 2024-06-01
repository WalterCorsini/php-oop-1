<?php 

// importo le classi 
// require_once "models/actor.php";
require_once "models/movie.php";
require_once "models/genre.php";

$genre1 = new Genre('horror','si');
$movie1 = new Movie('ciao mamma', $genre1);
$movie1-> description = "un film in cui salutano la mamma tutto il tempo";
$movie1-> vote = 5;
$movie1-> date_release = "21-11-1990";
var_dump($movie1);

$genre2 = new Genre('commedia','no');
$movie2 = new Movie('ciao papa', $genre1);
$movie2-> description = "un film in salutano papà tutto il tempo";
$movie2-> vote = 5;
$movie1-> date_release = "21-11-2000";
var_dump($movie1);

?>