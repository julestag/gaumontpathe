<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
if (!empty($_GET['histoutilisateur'])) {
    $utilisateur = htmlspecialchars($_GET['histoutilisateur']);
    $historique1 = $bdd->query("select movie.title, movie_schedule.date_begin from movie join movie_schedule on movie.id = movie_schedule.id_movie join membership_log on movie_schedule.id = membership_log.id_session where membership_log.id_membership = $utilisateur");
}
if (!empty($_GET['addutil']) && !empty($_GET['addmov'])) {
    $addutil = htmlspecialchars($_GET['addutil']);
    $addmov = htmlspecialchars($_GET['addmov']);
    $historique2 = $bdd->query("INSERT INTO membership_log VALUES ('$addutil', '$addmov')");
}
?>