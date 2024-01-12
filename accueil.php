<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpeedBall Tennis Club</title>
    <link rel="icon" href="./img/icnT0.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./img/icnT0.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>

<?php ob_start(); ?>
<!-- banner -->
<!-- nav-bar -->
<!-- footer -->
<?php 
$content=ob_get_clean();
require_once ("template.php");
?>

<main>
        <?= $content; ?>
        <section class="hero">
            <h1>Bienvenue sur notre site dédié au tennis</h1>
            <p>Découvrez les dernières nouvelles, les meilleurs joueurs, et plus encore !</p>
            <a href="#" class="hero-button">En savoir plus</a>
            <div class="who-is-us">
                <h2>Qui sommes nous ?</h2>
                <p>Nous sommes un club de Tennis situé dans le 11ème arondissement de Paris </p>
            </div>
        </section>

        <section class="news">
            <h2>Actualités récentes</h2>
            <article class="texte-news">
                <img src="news1.jpg" alt="Nouvelle actualité">
                <h3>Titre de l'actualité 1</h3>
                <p>Description de l'actualité 1</p>
            </article>
            <article>
                <img src="news2.jpg" alt="Nouvelle actualité">
                <h3>Titre de l'actualité 2</h3>
                <p>Description de l'actualité 2</p>
            </article>
        </section>

    </main>

    </html>