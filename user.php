<?php
include('dbuser.php');
include('dbuser2.php');
include('dbuserl.php');
include('abonnement.php');
include('abonnement2.php');
include('modif.php');
include('creation.php');
include('delete.php');
include('historique.php');
include('add.php');
include('searchbydate.php');
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
         </div>
         <hr>
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
         <hr>
            </div>
         <div class="deleting">
        <form method="GET">
            <section class="historique">
                <div class="histo">
                    <h1> Historique utilisateur </h1>
                    <input type="search" name="histoutilisateur" placeholder="ID de l'utilisateur">
                    <input type="submit" name="envoi220">
                    <h1> Ajouter dans l'historique </h1>
                    <input type="search" name="addutil" placeholder="ID de l'utilisateur">
                    <input type="search" name="addmov" placeholder="ID du schedule movie">
                    <input type="submit" name="envoi221">
            </form>
               
                <?php
                if (isset($historique1) && $historique1->rowCount() > 0) {
                    while (($histo = $historique1->fetch())) {
                        ?>
                            <p><b>Titre film :</b><?= $histo['title'] ?> </p> <p><b> Date du visionnage :</b><?= $histo['date_begin']; ?></p> <p> ____________________________</p>
                        <?php
                            }
                        }
                        if (isset($historique2) && $historique2->rowCount() > 0) {
                                ?>
                                    <p>Ajout effectuée</p>
                                <?php
                                    }
                ?>
         </div>
                                </div>
                                </div>
                                <hr>
                                <h1>Ajout d'une programmation</h1>
                                <form method="GET">
         <div class ="ajoutfilm">
         <label for="meeting-time">Date et heure de programmation : </label>

         <input type="date" id="start" name="time" value="01-01-2010" min="2000-01-01" max="2050-12-31" />
         <input type="time" id="appt" name="time1" min="09:00" max="00:00" required />


  <br>
         <select name="room" class="select">
                    <option value="">select salle</option>
                    <option value="1">Montana</option>
                    <option value="2">Hightscore</option>
                    <option value="3">Salle 3</option>
                    <option value="4">Astek</option>
                    <option value="5">Gecko</option>
                    <option value="6">Azur</option>
                    <option value="7">Toshiba</option>
                    <option value="8">Salle 14</option>
                    <option value="9">asus</option>
                    <option value="10">salle 16</option>
                    <option value="11">Microsoft</option>
                </select>
                <input type="search" name="idmoviee" placeholder="ID du film">
                <input type="submit" name="envoiok2">
                                </form>
                <?php
                if (isset($adding12) && $adding12->rowCount() > 0) {
                                ?>
                                    <p>Ajout effectuée</p>
                                <?php
                                    }
                ?>
                </div>
                                </div>
<hr>
            <div class="search">
            <h1>Recherche de date de programmation<h1>
                    <form method="GET">
                    <input type="date" id="start" name="time2" value="01-01-2010" min="2000-01-01" max="2050-12-31" />
  <input type="submit" name="envoiok29">
                                </form>
                                <div class="ecris">
                                <?php
                                if (isset($search23) && $search23->rowCount() > 0) {
                    while (($lol1 = $search23->fetch())) {
                        ?>
                            <p><b>Titre film :</b><?= $lol1['title'] ?> </p> <p><b> Date du visionnage :</b><?= $lol1['date_begin']; ?></p> <p> ____________________________</p>
                        <?php
                            }
                        }
                        ?>
                        </div>
                    </div>

    </body>
</html>
