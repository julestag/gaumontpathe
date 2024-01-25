<?php
if (!empty($_GET['lastname']) or !empty($_GET['firstname'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
    $first = htmlspecialchars($_GET['firstname']);
    $ca = $bdd->query("SELECT *, subscription.name FROM user JOIN membership ON user.id = membership.id_user JOIN subscription ON subscription.id = membership.id_subscription WHERE firstname LIKE '%$first%'");
}
?>
