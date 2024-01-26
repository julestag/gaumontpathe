<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
if (isset($_GET['l']) && !empty($_GET['l']) && empty($_GET['s']) && empty($_GET['f'])) {
    $distrib = htmlspecialchars($_GET['l']);
    $distrib_search = $bdd->query('SELECT * FROM movie INNER JOIN distributor ON movie.id_distributor = distributor.id WHERE name LIKE "%'.$distrib.'%"');
}
?>