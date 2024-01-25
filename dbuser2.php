<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');

if (isset($_GET['lastname']) && !empty($_GET['lastname']) && empty($_GET['firstname'])) {
    $last = htmlspecialchars($_GET['lastname']);
    $lastname1 = $bdd->query("SELECT * FROM user WHERE lastname LIKE '%$last%' ORDER BY id DESC");
}
?>