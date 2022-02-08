<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>Vous inscrire - MyThinks</title>
   </head>

   <body>
      <?php
      echo "<header>";
          
            include "include/navbar.php";  
      echo "</header>";
      
      include "include/database.php";
      global $db;
      
      ?>

      <h1>Sign in :</h1>

      <form method="POST">
         <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required> <br />
         <input type="text" name="email" id="email" placeholder="Votre email" required> <br />
         <input type="password" name="password" id="password" placeholder="Votre mot de passe" required> <br />
         <input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre mot de passe" required>
         <br />
         <input type="submit" name="formsend" id="formsend" value="Sign in">
      </form>

      <?php include "include/signin.php"; ?>

      <form action="forget_password.php">
         <button type="submit" class="btn">Mot de passe oublié</button>
      </form>


      <form action="index.php">
         <button class="btn" type="submit">Retourner à la page d'accueil</button>'
      </form>
      <form action="login.php">
         <button class="btn" type="submit">Se connecter</button>
      </form>
   </body>

</html>
