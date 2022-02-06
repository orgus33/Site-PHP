      <?php



         if(isset($_POST["formsend"])){

            extract($_POST);

            if(!empty($pseudo && $email && $password && $cpassword)){

               if($password == $cpassword){
                  $options = [
                     "cost" => 12,
                  ];

                  $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

                  $c = $db->prepare("SELECT email FROM users WHERE email = :email");
                  $c->execute(['email' => $email]);
                  $result = $c->rowCount();

                  if($result == 0) {
                     $q = $db->prepare("INSERT INTO users(pseudo,email,password) VALUES(:pseudo,:email,:password)");
                     $q->execute([
                        'pseudo' => $pseudo,
                        'email' => $email,
                        'password' => $hashpass
                     ]);
                     echo "<p> Le compte à été créé </p>";
                  } else {
                     echo "<p> Cet email existe déjà </p>";
                  }


                  
               }
            } else {
               echo "<p> Les champs ne sont pas tous remplis </p>";
            }

            
         }

      ?>
