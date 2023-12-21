<!DOCTYPE html>
<html lang="fe">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
<?php
          $servername = "localhost";
          $username = "root";
          $password = "";

          try{
            $bdd = new POD("mysql:host=$servername;dbname=utilisateurs",$username, $password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //echo "connexion réussi !";
          }

          catch(PDOException $e){
            echo "Erreur : ".$e->getMessage();
           }


              if($_SERVER["REQUEST_METHOD"] == "POST"){
                $email = $_POST['email'];
                $password = $_POST['password'];
                  if ($email != "" && $password != ""){
                  // connexion à la BDD
                $req = $bdd->query("SELECT * FROM users WHERE email ='$email' AND mdp = '$password');
                $rep = $req->fetch();
                if($rep['id'] != false)] {
                  --  c'est ok !
                  --  echo "Vous êtes connecté !";
                  header("Location: succes.php");
                  exit();
                }
                else{
                  $error_msg = "Email ou mot de pass incorrect !";
                    }
                  }
              }
?>
 
<form method="POST" action="">
<label for="email">Adresse Mail :</label>
<input type="text" id="email" name="email" placeholder="Votre adresse Mail">
<label for="password">Mot de passe :</label>
<input type="password" id="password" name="password" placeholder="Votre mot de passe">
    <button type="submit" value="Se connecter" name="connexion"></button>



<?php
              if($error_msg) {
                <p><?php echo $error_msg; ?></p>
                <?php
              }

?>

</body>
</html>