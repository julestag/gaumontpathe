<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
if (!empty($_GET['time2'])) {
    $time2 = htmlspecialchars($_GET['time2']);
    $adding12 = $bdd->query('SELECT movie.title FROM `movie_schedule`join movie on id_movie = movie.id where date_begin like "%'.$time2.'%"');
}
?>
