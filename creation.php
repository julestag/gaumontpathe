<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinema;', 'jules', 'F05D730D5F');
if (!empty($_GET['createabo']) && !empty($_GET['createutilisateur'])) {
    $abonnement = htmlspecialchars($_GET['createabo']);
    $utilisateur = htmlspecialchars($_GET['createutilisateur']);
    $creating = $bdd->query("INSERT INTO `membership` (`id`, `id_user`, `id_subscription`, `date_begin`) VALUES (NULL, $utilisateur, $abonnement, CURRENT_TIME)");
}
?>
