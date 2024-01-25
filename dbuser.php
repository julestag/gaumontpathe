<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');

if (isset($_GET['firstname']) && !empty($_GET['firstname']) && empty($_GET['lastname'])) {
    $first = htmlspecialchars($_GET['firstname']);
    $firstname1 = $bdd->query("SELECT * FROM user WHERE firstname LIKE '%".$first."%' ORDER BY id DESC");
}
?>