<?php

// importo le classi 
require_once "models/actor.php";
require_once "models/movie.php";
require_once "models/genre.php";

// inserimento attori

$actor1 = new Actor("Luca", "Giardina");
$actor1->setActor("Sofia ", "Perlari");
$actor2 = new Actor("Loris", "Barbiero");
$actor2->setActor("Olga ", "Demina");
// film 1
$genre1 = new Genre('horror', 'si');
$movie1 = new Movie('ciao mamma', $genre1, $actor1);
$movie1->setData("21-11-1990");
$movie1->setVote(2);
$movie1->setDescription("descrizione film1");
// /film 1
// film 2
$genre2 = new Genre('commedia', 'no');
$movie2 = new Movie('ciao papa', $genre2, $actor2);
$movie2->setData("01-06-2024");
$movie2->setVote(1);
$movie2->setDescription("descrizione film2");
// /film 2

$movie = [];
$movie[] = $movie1;
$movie[] = $movie2;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style css -->
    <link rel="stylesheet" href="./css/styl.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php foreach ($movie as $movie) { ?>
    <ul>
            <li><?php echo $movie->getTitle(); ?>
            <li><?php echo $movie->getData(); ?></li>
            <li><?php echo $movie->getVote(); ?></li>
            <li><?php echo $movie->getDescription(); ?></li>
            <li><?php echo $movie->genre->getGenre(); ?></li>
            <li><?php echo $movie->genre->getAdultOnly(); ?></li>
            <li>Cast:
                <ul>
                    <?php echo $movie->actor->getActor() . "" ?>
                </ul>
            </li>
    </ul>
<?php } ?>
</ul>
<!-- echo $movie1->genre->getAdultOnly() -->
</body>

</html>