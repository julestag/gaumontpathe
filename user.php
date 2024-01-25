<?php
include('dbuser.php');
include('dbuser2.php');
include('dbuserl.php');
include('abonnement.php');
include('abonnement2.php');
include('modif.php');
include('creation.php');
include('delete.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administration cinema</title>
    <meta charset="utf-8">
</head>
<body>
    <h1> Informations clients </h1>
    <form method="GET">
        <section class="afficher">
            <input type="search" name="lastname" placeholder="Recherche par nom">    
            <input type="search" name="firstname" placeholder="Recherche par prénom">
            <input type="submit" name="envoi">
        </form>
        <a href="index.php" target="_blank">Retour</a>

        <?php
        if (isset($double) && $double->rowCount() > 0) {
            while (($di = $double->fetch()) && ($dv = $co->fetch())) {
        ?>
            <p><b>Prénom :</b><?= $di['firstname'] ?> </p> <p><b> Nom :</b><?= $di['lastname']; ?></p> <p><b> Abonnement :</b><?= $dv['name']; ?></p><p><b> ID Utilisateur :</b><?= $di['id']; ?></p> <p> ____________________________</p>
        <?php
            }
        }

        if (isset($lastname1) && $lastname1->rowCount() > 0) {
            while (($last = $lastname1->fetch()) && ($df = $co->fetch())) {
        ?>
            <p><b>Prénom :</b><?= $last['firstname'] ?> </p> <p><b> Nom :</b><?= $last['lastname']; ?></p> <p><b> Abonnement :</b><?= $df['name']; ?></p> <p><b> Adresse :</b><?= $last['address']; ?></p> <p><b> Ville :</b><?= $last['city']; ?></p><p><b> ID Utilisateur :</b><?= $last['id']; ?></p> <p> ____________________________</p>
        <?php
            }
        }

        if (isset($firstname1) && $firstname1->rowCount() > 0) {
            while (($first = $firstname1->fetch()) && ($dk = $co->fetch())) {
        ?>
            <p><b>Prénom :</b><?= $first['firstname'] ?> </p> <p><b> Nom :</b><?= $first['lastname']; ?></p> <p> ____________________________</p>
        <?php
            }
        } else if (isset($firstname1) && $firstname1->rowCount() > 0) {
        ?>
            <p><b>Prénom :</b><?= $first['firstname'] ?> </p> <p><b> Nom :</b><?= $first['lastname']; ?></p> <p><b> Abonnement :</b> Aucun</p> <p><b> Adresse :</b><?= $first['address']; ?></p> <p><b> Ville :</b><?= $first['city']; ?></p><p><b> ID Utilisateur :</b><?= $first['id']; ?></p> <p> ____________________________</p>
        <?php
        } else if (isset($lastname1) && $lastname1->rowCount() > 0) {
        ?>
            <p><b>Prénom :</b><?= $last['firstname'] ?> </p> <p><b> Nom :</b><?= $last['lastname']; ?></p> <p><b> Abonnement :</b> Aucun</p> <p><b> Adresse :</b><?= $last['address']; ?></p> <p><b> Ville :</b><?= $last['city']; ?></p><p><b> ID Utilisateur :</b><?= $last['id']; ?></p> <p> ____________________________</p>
        <?php
        } else if (isset($double) && $double->rowCount() > 0) {
        ?>
            <p><b>Prénom :</b><?= $di['firstname'] ?> </p> <p><b> Nom :</b><?= $di['lastname']; ?></p> <p><b> Abonnement :</b> Aucun</p> <p><b> Adresse :</b><?= $di['address']; ?></p> <p><b> Ville :</b><?= $di['city']; ?></p><p><b> ID Utilisateur :</b><?= $di['id']; ?></p> <p> ____________________________</p>
        <?php
        }
        ?>
        </section>
        <hr>
        <form method="GET">
            <section class="modification">
                <div class="selecteur3">
                    <h1> Modifier un abonnement </h1>
                    <input type="search" name="abonnement" placeholder="ID de l'abonnement">
                    <input type="search" name="utilisateur" placeholder="ID de l'utilisateur">
                    <input type="submit" name="envoi2">
                </div>

                <?php
                if (isset($modiff) && $modiff->rowCount() > 0) {
                ?>
                    <i>Modification effectuée ! </i>
                <?php
                }
                ?>
            </section>
        </form>
        <p> 1 - VIP  - Le mois tout compris </p>
        <p> 2 - GOLD - L'année complète</p>
        <p>3 - Classic - Abonnement mensuel classique</p>
        <p>4 - Pass Day - Pass valable une journée</p>
        <hr>
        <div class="creation">
        <form method="GET">
            <section class="modification">
                <div class="selecteur3">
                    <h1> Créer un abonnement </h1>
                    <input type="search" name="createabo" placeholder="ID de l'abonnement">
                    <input type="search" name="createutilisateur" placeholder="ID de l'utilisateur">
                    <input type="submit" name="envoi45">
               
                <?php
                if (isset($creating) && $creating->rowCount() > 0) {
                ?>
                    <i>Création effectuée ! </i>
                <?php
                }
                ?>
         </div>
         <div class="deleting">
        <form method="GET">
            <section class="delete">
                <div class="selecteur8">
                    <h1> supprimer un abonnement </h1>
                    <input type="search" name="deleteutilisateur" placeholder="ID de l'utilisateur">
                    <input type="submit" name="envoi452">
               
                <?php
                if (isset($deleteutilisateur) && $deleteutilisateur->rowCount() > 0) {
                ?>
                    <i>Suppression effectuée ! </i>
                <?php
                }
                ?>
         </div>
         <div class="deleting">
        <form method="GET">
            <section class="historique">
                <div class="histo">
                    <h1> Historique utilisateur </h1>
                    <input type="search" name="histoutilisateur" placeholder="ID de l'utilisateur">
                    <input type="submit" name="envoi220">
               
                <?php
                if (isset($deleteutilisateur) && $deleteutilisateur->rowCount() > 0) {
                ?>
                    <i>Suppression effectuée ! </i>
                <?php
                }
                ?>
         </div>
    </body>
</html>
