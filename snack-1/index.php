<?php
/*
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60
*/

  $matches = [
    [
      "homeTeam" => [
        "nameTeam" => "Armani Exchange Milano",
        "points" => 87
      ],
      "visitingTeam" => [
        "nameTeam" => "UNAHOTELS Reggio Emilia",
        "points" => 71
      ],
    ],
    [
      "homeTeam" => [
        "nameTeam" => "Germani Brescia",
        "points" => 89
      ],
      "visitingTeam" => [
        "nameTeam" => "Openjobmetis Varese",
        "points" => 94
      ],
    ],
    [
      "homeTeam" => [
        "nameTeam" => "Dolomiti Energia Trentino",
        "points" => 80
      ],
      "visitingTeam" => [
        "nameTeam" => "De' Longhi Treviso Basket",
        "points" => 84
      ],
    ],
    [
      "homeTeam" => [
        "nameTeam" => "Allianz Pallacanestro Trieste",
        "points" => 102
      ],
      "visitingTeam" => [
        "nameTeam" => "Vanoli Basket Cremona",
        "points" => 77
      ],
    ],
    [
      "homeTeam" => [
        "nameTeam" => "Carpegna Prosciutto Pesaro",
        "points" => 85
      ],
      "visitingTeam" => [
        "nameTeam" => "Banco di Sardegna Sassari",
        "points" => 95
      ],
    ],
    [
      "homeTeam" => [
        "nameTeam" => "Virtus Segafredo Bologna",
        "points" => 84
      ],
      "visitingTeam" => [
        "nameTeam" => "Acqua S.Bernardo Cantù",
        "points" => 65
      ],
    ],
  ];
  // var_dump($matches);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <h1>1° Giornata -Andata</h1>
    <?php
    for ($i=0; $i < count($matches); $i++) {
      echo "<li>".$matches[$i]["homeTeam"]["nameTeam"]. " - " .$matches[$i]["visitingTeam"]["nameTeam"]. " | " .$matches[$i]["homeTeam"]["points"]. " - " .$matches[$i]["visitingTeam"]["points"]. "</li>";
    }
     ?>

  </body>
</html>
