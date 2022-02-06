<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>Page 3 - Bastien</title>
   </head>

   <body>
      <?php 
      include "include/nav.php";      
      ?>

      <h1>Présentation de la page 3 :</h1>

      <p>
         Ceci est la page 3
      </p>

      <form action="index.php">
         <button class="btn" type="submit">Retourné à la page d'accueil</button>
      </form>
   </body>

</html>
