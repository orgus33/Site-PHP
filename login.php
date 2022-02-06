<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>Vous connecter - MyThinks</title>
   </head>

   <body>
      <?php 
      include "include/nav-login.php";
      include "include/database.php";
      global $db;

      if(isset($_SESSION["pseudo"]) && isset($_SESSION["email"])) {
			echo "<p> Vous êtes connecté en tant que " . $_SESSION['pseudo'] . "</p>";
			echo "<p> Votre email est : " . $_SESSION['email'] . "</p>";
		}
      ?>

      <h1>Login :</h1>

      <form method="POST">
         <input type="text" name="lpseudo" id="lpseudo" placeholder="Votre pseudo" required> <br />
         <input type="password" name="lpassword" id="lpassword" placeholder="Votre mot de passe" required> <br />
         <br />
         <input type="submit" name="formlogin" id="formlogin" value="Login">
      </form>

      <?php include "include/login.php" ?>


      <form action="index.php">
         <button class="btn" type="submit">Retourner à la page d'accueil</button>'
      </form>
      <form action="signin.php">
         <button class="btn" type="submit">S'inscrire</button>
      </form>
   </body>

</html>
