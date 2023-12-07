<?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
    
    }
    catch(Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }



    
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // You can add your authentication logic here (e.g., check against a database)

        // For demonstration purposes, I'm just echoing the entered values
        echo "Username: $username<br>";
        echo "Password: $password<br>";

        // You can redirect the user or perform other actions after authentication
    }
?>

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
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Actualités</a></li>
                <li><a href="#">Joueurs</a></li>
                <li><a href="#">Calendrier</a></li>
                <li><a href="#">Boutique</a></li>
            </ul>
        </nav>
        <button id="login-btn">Connexion</button>

    </header>

    <main>
        <section class="hero">
            <h2>Bienvenue sur notre site dédié au tennis</h2>
            <p>Découvrez les dernières nouvelles, les meilleurs joueurs, et plus encore.</p>
            <a href="#" class="cta-button">En savoir plus</a>
        </section>

        <section class="news">
            <h2>Actualités récentes</h2>
            <article>
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

    <footer>
        <p>&copy; 2023 - SpeedBall Tennis Club. Tous droits réservés.</p>
    </footer>
</body>
</html>
