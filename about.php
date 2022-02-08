<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>A propos de moi - Bastien</title>
   </head>

   <body>

      <header>
         <?php 
            include "include/navbar.php";  

         ?>
      </header>
      <h1>A propos de moi</h1>
      <p>Voici les apercu de mes différents projets et mon <a class="github" href="https://github.com/orgus33"
            target="_blank">lien
            github</a></p>


      <form action="index.php">
         <button class="btn" type="submit">Retourné à la page d'accueil</button>
      </form>
   </body>

</html>
