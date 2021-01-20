<?php
/*
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato”.
*/
  $name = $_GET["name"];
  $email = $_GET["email"];
  $age = $_GET["age"];;
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Snack 2</title>
   </head>
   <body>
     <?php if (!empty($email) && !empty($name) && !empty($age)) {
              if (strpos($email, "@") && strpos($email, ".") && strlen($name) > 3 && is_numeric($age)) {
                $message = "Accesso riuscito";
                echo $message;
              } else {
                $message = "Accesso negato";
                echo $message;
              }
          } else {
            $message = "Accesso negato";
            echo $message;
          }
     ?>

   </body>
 </html>
