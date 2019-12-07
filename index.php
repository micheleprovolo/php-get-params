<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <!-- Stampare una stringa verde se la
variabile password passata in GET è
uguale a “Boolean”, altrimenti stampare
una stringa rossa. -->

    <?php

      $password = $_GET["password"];

    ?>

</head>
<body>

      <?php
      if($password === "Boolean") {
        echo "<h1 style='color:green'>stringa verde</h1>";
        } else {
        echo "<h1 style='color:red'>stringa rossa</h1>";
        }

?>
</body>
</html>
