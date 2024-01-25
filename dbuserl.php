<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
if ((!empty($_GET['lastname'])) && !empty($_GET['firstname'])) {
    $last = htmlspecialchars($_GET['lastname']);
    $first = htmlspecialchars($_GET['firstname']);
    $double = $bdd->query("SELECT * FROM user WHERE firstname LIKE '%$first%' AND lastname LIKE '%$last%'");
}
?>
