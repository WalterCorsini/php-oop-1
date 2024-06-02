<?php

// importo le classi 
require_once "models/actor.php";
require_once "models/movie.php";
require_once "models/genre.php";

// inserimento attori

$actor1 = new Actor("Luca", "Giardina");
$actor1->setActor("Sofia", "Perlari");
$actor2 = new Actor("Loris", "Barbiero");
$actor2->setActor("Olga", "Demina");
// film 1
$genre1 = new Genre('horror', 'Si');
$movie1 = new Movie('ciao mamma', $genre1, $actor1);
    //  inserimento data gg-mm-yyyy
$movie1->setData("21-11-1989");
$movie1->setVote(2);
$movie1->setDescription("descrizione film1 davvero molto bello");
$movie1->setImage("./img/ciao-mamma.jpg");
// /film 1

// film 2
$genre2 = new Genre('commedia', 'no');
$movie2 = new Movie('ciao papa', $genre2, $actor2);
    //  inserimento data gg-mm-yyyy
$movie2->setData("02-06-2024");
$movie2->setVote(1);
$movie2->setDescription("descrizione film2 un po meno bello");
$movie2->setImage("./img/ciao-papa.jpg");
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
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="w-100 d-flex gap-4 justify-content-center mt-4">
    <?php foreach ($movie as $movie) { ?>
        <div class="card" style="width: 18rem;">
            <div class="front-card">
            <img src="<?php echo $movie->getImage() ?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <p><?php echo $movie->getTitle(); ?></p>
                <p><?php echo $movie->getData(); ?></p>
                <p><?php echo $movie->getVote(); ?></p>
                <p><?php echo $movie->genre->getGenre(); ?></p>
                <p><?php echo $movie->genre->getAdultOnly(); ?></p>
                <p class="card-text"><?php echo $movie->getDescription(); ?></p>
                <span><strong>Cast: </strong></span>
                <ul>
                    <?php echo $movie->actor->getActor() . "" ?>
                </ul>
            </div>
        </div>
    <?php } ?>
    <!-- echo $movie1->genre->getAdultOnly() -->
</body>

</html>