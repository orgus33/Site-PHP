<?php session_start(); ?>


<!DOCTYPE html>
<html lang="fr">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>Page d'accueil - Bastien</title>
   </head>

   <body>
      <header>
         <?php 
            include "include/navbar.php";  

         ?>
      </header>
      



      <h1>Présentation de mon site</h1>

      <p>
         Site pour ce connecter<br />
         Cliquer sur le boutton ci-dessous pour en savoir plus :
      </p>

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
