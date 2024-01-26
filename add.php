<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
if (!empty($_GET['idmoviee']) && !empty($_GET['room'] && !empty($_GET['time'] && !empty($_GET['time1'])))) {
    $idmovie = htmlspecialchars($_GET['idmoviee']);
    $room = htmlspecialchars($_GET['room']);
    $time = htmlspecialchars($_GET['time']);
    $time1 = htmlspecialchars($_GET['time1']);
    $adding12 = $bdd->query("INSERT INTO `movie_schedule` (`id`, `id_movie`, `id_room`, `date_begin`) VALUES (NULL, $idmovie, $room, '$time $time1:00')");
}
?>
