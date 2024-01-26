<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
if ((isset($_GET['s']) && !empty($_GET['s'])) && (isset($_GET['f']) && !empty($_GET['f'])) && empty($_GET['l'])) {
    $genreb = htmlspecialchars($_GET['f']);
    $cinemab = htmlspecialchars($_GET['s']);
    $genremovie = $bdd->query('SELECT movie.*, genre.name FROM movie JOIN movie_genre ON movie.id = movie_genre.id_movie JOIN genre ON genre.id = movie_genre.id_genre WHERE name LIKE "%'.$genreb.'%" AND title LIKE "%'.$cinemab.'%"');
}
?>