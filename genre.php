<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
if (isset($_GET['f']) && !empty($_GET['f']) && empty($_GET['s']) && empty($_GET['l'])) {
    $genrea = htmlspecialchars($_GET['f']);
    $genre_search = $bdd->query('SELECT movie.title, genre.name FROM movie JOIN movie_genre ON movie.id = movie_genre.id_movie JOIN genre ON genre.id = movie_genre.id_genre WHERE name LIKE "%'.$genrea.'%"');
}
?>