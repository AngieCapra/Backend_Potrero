<!DOCTYPE html>
<html lang="es-ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tp4_backend</title>
</head>

<body>
  <style>
    html {
      font-family: montserrat, arial, helvetica, sans-serif;
    }

    h1,
    h2 {
      text-decoration: underline;
    }

    footer {
      font-family: 'Courier New', Courier, monospace;
    }
  </style>
  <h1>Trabajo Práctico N°4 Backend php:</h1>

  <?php

  print "<h2>Ejercicio N°1:</h2>";
  print "<br>";
  print "<h3>Mostrar los números del 1 al 100.</h3>";

  $i = 1;
  do {
    print "<p>$i</p>\n";
    $i++;
  } while ($i <= 100);

  ?>

  <?php
  print "<h2>Ejercicio N°2:</h2>";
  print "<br>";
  print "<h3>Mostrar los números del 100 al 1.</h3>";

  $i = 100;
  do {
    print "<p>$i</p>\n";
    $i--;
  } while ($i >= 1);

  ?>

  <?php

  print "<h2>Ejercicio N°3:</h2>";
  print "<br>";
  print "<h3>Mostrar los números pares del 1 al 100.</h3>";
  $i = 2;
  do {
    print "<p>$i</p>\n";
    $i = $i + 2;
  } while ($i <= 100);

  ?>

  <?php
  print "<h2>Ejercicio N°4:</h2>";
  print "<br>";
  print "<h3>Mostrar los números impares del 1 al 100.</h3>";

  $i = 1;
  do {
    print "<p>$i</p>\n";
    $i = $i + 2;
  } while ($i < 100);
  ?>

  <?php
  print "<h2>Ejercicio N°5:</h2>";
  print "<br>";
  print "<h3>Mostrar la suma de los números de 1 a 20.</h3>";


  $suma = 0;
  for ($i = 1; $i <= 20; $i++) {
    $suma += $i;
    print "<p>$suma</p>\n";
  }
  ?>

  <?php
  print "<h2>Ejercicio N°6:</h2>";
  print "<br>";
  print "<h3>Mostrar la suma de los números pares de 1 a 20.</h3>";

  $suma = 0;
  for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
      $suma += $i;
      print "<p>$suma</p>";
    }
  }

  ?>
</body>

<hr>
<footer>Angie Caprarulo para Potrero Digital Backend</footer>

</html>

</html>