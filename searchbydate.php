<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
if (!empty($_GET['time2'])) {
    $time2 = htmlspecialchars($_GET['time2']);
    $search23 = $bdd->query("SELECT movie.title ,movie_schedule.date_begin FROM `movie_schedule`join movie on id_movie = movie.id where date_begin BETWEEN '$time2' AND '$time2 23:59'");
}
?>
