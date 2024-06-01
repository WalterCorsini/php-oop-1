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
// /film 1

// film 2
$genre2 = new Genre('commedia','no');
$movie2 = new Movie('ciao papa', $genre2);
$movie2-> setData("21-11-1990");
$movie2-> setVote(1);
$movie2-> setDescription("descrizione film2");
// /film 2

$movie=[];
$movie[]= $movie1;
$movie[]= $movie2;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($movie as $movie) {?>
        <li><?php echo $movie->getTitle(); ?>
            <ul>
                <li><?php echo $movie->getData(); ?></li>
                <li><?php echo $movie->getVote(); ?></li>
                <li><?php echo $movie->getDescription(); ?></li>
                <li><?php echo $movie->genre->getGenre(); ?></li>
                <li><?php echo $movie->genre->getAdultOnly(); ?></li>
            </ul>
        </li>
        
<?php }?>
    </ul>
    <!-- echo $movie1->genre->getAdultOnly() -->
</body>
</html>