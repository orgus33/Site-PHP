<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>Page 4 - Bastien</title>
   </head>

   <body>
      <header>
         <?php 
            include "include/navbar.php";  

         ?>
      </header>

      <h1>Présentation de la page 4 :</h1>

      <p>
         Ceci est la page 4
      </p>
      <form action="index.php">
         <button class="btn" type="submit">Retourné à la page d'accueil</button>
      </form>
   </body>

</html>
