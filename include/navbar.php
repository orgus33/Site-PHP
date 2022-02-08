<?php
   function nav_item($lien, $title) {
      if ($_SERVER["SCRIPT_NAME"] === $lien) {
         $classe = "active";
         return "<a href='" . $lien . "' class='" . $classe . "'>" . $title . "</a>";

      } else {
         return "<a href='" . $lien . "'>" . $title . "</a>";

      }

      
   }


?>

<nav>
   <div class="gauche">
      <?php echo nav_item("/php_bastien/Site-PHP/index.php", "Home") ?>
      <?php echo nav_item("/php_bastien/Site-PHP/sommaire.php", "Sommaire") ?>
      <?php echo nav_item("/php_bastien/Site-PHP/about.php", "About") ?>
      <?php echo nav_item("/php_bastien/Site-PHP/profil.php", "Profil") ?>
   </div>
   <div class="right">
      <?php echo nav_item("/php_bastien/Site-PHP/login.php", "Se connecter") ?>
      <?php echo nav_item("/php_bastien/Site-PHP/signin.php", "S'inscrire") ?>
   </div>
</nav>
