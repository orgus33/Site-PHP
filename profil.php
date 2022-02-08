<?php session_start(); ?>


<!DOCTYPE html>
<html lang="fr">

   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>Profil - MyThinks</title>
   </head>

   <body>
      <?php 
      echo "<header>";
         
            include "include/navbar.php";  

      echo "</header>"; 
		
		if(isset($_SESSION["pseudo"]) && isset($_SESSION["email"])) {
         
			echo "<p> Vous êtes connecté en tant que " . $_SESSION['pseudo'] . "</p>";
			echo "<p> Votre email est : " . $_SESSION['email'] . "</p>";
         echo "<p> Vous êtes un " . $_SESSION['groupe'] . " du site.</p>";
         echo "<p> Souhaité vous modifier votre date de naissance ?";

		} else {
			echo "<p>Veuillez-vous connecté ou vous inscrire</p>";
         echo '<form action="login.php">
                  <button class="btn" type="submit">Login</button>
               </form>

               <form action="signin.php">
                  <button class="btn" type="submit">Signin</button>
               </form>';
		}

      ?>



   </body>

</html>
