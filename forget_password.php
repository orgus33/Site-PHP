<?php session_start(); ?>


<!DOCTYPE html>
<html lang="fr">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>Mot de passe oublié - Bastien</title>
   </head>

   <body>
      <header>
         <?php 
            include "include/navbar.php";  

         ?>
      </header>



      <h1>Suivez les étapes ci-dessous pour réinitinalisé votre mot de passe</h1>

      <p>Entrez votre address email pour réinitalisé le mot de passe</p>

      <form method="post">
         <text id="email_input">Entrez votre adresse email</text>
         <input type="text" id="email_input">
      </form>

      <form action="sommaire.php">
         <button class="btn" type="submit">Cliquer ici</button>
      </form>

      <form action="login.php">
         <button class="btn" type="submit">Login</button>
      </form>

      <form action="signin.php">
         <button class="btn" type="submit">Signin</button>
      </form>
   </body>

</html>
