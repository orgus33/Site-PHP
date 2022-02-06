<?php



   if(isset($_POST["formlogin"])){

      extract($_POST);
      
      if(!empty($lpseudo) && !empty($lpassword) && !empty($lpseudo)) {
         
         $q = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
         $q-> execute(['pseudo' => $lpseudo]);
         $result = $q->fetch();

         if($result == true) {

            if(password_verify($lpassword, $result['password'])){

               echo "<p>Le mot de passe est bon, connexion en cours";

               $_SESSION['pseudo'] = $result["pseudo"];
               $_SESSION['date'] = $result["date"];
               $_SESSION['email'] = $result["email"];
               $_SESSION['groupe'] = $result["groupe"];
            } else {
               echo "<p>Le mot de passe n'est pas correct, veuillez réésayer</p>";
            }

         } else {
            echo "<p> Le pseudo : " . $lpseudo . " n'a pas de compte attribué</p>";
         }

         

      } else {
         echo "<p> Veuillez completer l'ensemble des champs</p>";
      }
      
}

?>
