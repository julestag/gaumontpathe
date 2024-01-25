
<?php
include('search_movie.php');
include('distrib.php');
include('genre.php');
include('genremovie.php');
include('genredistrib.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recherche des films</title>
    <meta charset="utf-8">
</head>
<body>
<form method="GET">
        <input type="search" name="s" placeholder="Recherche un film">    
    <section class="afficher">
            <input type="search" name="l" placeholder="Recherche un distributeur">
        </form>
        <section class="afficher">
            <div class="sel">
            <select name="f" class="select">
                    <option value="">select genre</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Animation">Animation</option>
                    <option value="Action">Action</option>
                    <option value="Biography">Biography</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Crime">Crime</option>
                    <option value="Drama">Drama</option>
                    <option value="Family">Family</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Horror">Horror</option>
                    <option value="Mystery">Mystery</option>
                    <option value="Romance">Romance</option>
                    <option value="Sci-fi">Sci-fi</option>
                </select>

                <input type="submit" name="envoyergenre">
                </form>
            </div>

            <?php

            if (isset($distrib_search) && $distrib_search->rowCount() > 0) {
                while ($dis = $distrib_search->fetch()) {
                    ?>
                    <p><?= $dis['title']; ?></p>
                    <?php
                }
            }
            if (isset($all_movies) && $all_movies->rowCount() > 0) {

                while ($movie = $all_movies->fetch()) {
                    ?>
                    <p><?= $movie['title']; ?></p>
                    <?php
                }
            }
            if (isset($genre_search) && $genre_search->rowCount() > 0) {

                while ($genr = $genre_search->fetch()) {
                    ?>
                    <p><?= $genr['title']; ?></p>
                    <?php
                }
            }
                if (isset($genremovie) && $genremovie->rowCount() > 0) {
                    while ($caca = $genremovie->fetch()) {
                        ?>
                        <p><?= $caca['title']; ?></p>
                        <?php
                    }
                }
                if (isset($distribmovie) && $distribmovie->rowCount() > 0) {
                    while ($lala = $distribmovie->fetch()) {
                        ?>
                        <p><?= $lala['title']; ?></p>
                        <?php
                    }
                }
            ?>
        </section>
        <a href="user.php" target="_blank">Admin</a>
    </body>
</html>
