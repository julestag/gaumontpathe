<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
if (!empty($_GET['abonnement']) && !empty($_GET['utilisateur'])) {
    $abonnement = htmlspecialchars($_GET['abonnement']);
    $utilisateur = htmlspecialchars($_GET['utilisateur']);
    $modiff = $bdd->query("UPDATE membership join user on user.id = membership.id_user SET id_subscription = $abonnement WHERE membership.id_user = $utilisateur");
}
?>