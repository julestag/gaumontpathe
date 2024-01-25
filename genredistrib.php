<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
if ((isset($_GET['s']) && !empty($_GET['s'])) && (isset($_GET['l']) && !empty($_GET['l'])) && empty($_GET['f'])) {
    $distribb = htmlspecialchars($_GET['l']);
    $cinemac = htmlspecialchars($_GET['s']);
    $distribmovie = $bdd->query("SELECT title FROM movie INNER JOIN distributor ON movie.id_distributor = distributor.id WHERE name LIKE '%$distribb%' AND movie.title like '%$cinemac%'");
}
?>