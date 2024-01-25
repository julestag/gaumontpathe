<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');

if (!empty($_GET['deleteutilisateur'])) {
    $utilisateur = htmlspecialchars($_GET['deleteutilisateur']);

    $bdd->query("DELETE FROM `membership_log` WHERE `id_membership` = $utilisateur");

    $bdd->query("DELETE FROM `membership` WHERE `id_user` = $utilisateur");
}
?>