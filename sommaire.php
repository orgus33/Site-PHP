<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>Sommaire - Bastien</title>
   </head>

   <body>
      <?php include "include/nav-sommaire.php"; ?>
      <h1>Sommaire : </h1>
      <ul class="sommaire">
         <li><a href="index.php">Home</a></li>
         <li><a href="about.php">A propos de moi</a></li>
         <li><a href="page3.php">Page 3</a></li>
         <li><a href="page4.php">Page 4</a></li>
      </ul>

      <form action="index.php">
         <button class="btn" type="submit">
            Retourner à la page d'accueil
         </button>
      </form>
   </body>

</html>
