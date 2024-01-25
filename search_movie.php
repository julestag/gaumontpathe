<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');

if (isset($_GET['s']) && !empty($_GET['s']) && empty($_GET['l']) && empty($_GET['f'])) {
    $cinema = htmlspecialchars($_GET['s']);
    $all_movies = $bdd->query('SELECT title FROM movie WHERE title LIKE "%'.$cinema.'%" ORDER BY id DESC');
}
?>