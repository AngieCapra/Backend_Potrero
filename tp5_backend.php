<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>tp5_backend</title>
</head>

<body>
  <style>
    html {
      font-family: montserrat, arial, helvetica, sans-serif;
    }

    h1 {
      text-decoration: underline;
    }

    h3 {
      font-family: monospace;
    }


    footer {
      font-family: 'Courier New', Courier, monospace;
    }
  </style>
  <h1>Trabajo Práctico N°5 Backend php:</h1>

  <h3>1. Almacenar en un Array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h3>
  <?php

  $pares = [2, 4, 6, 8, 10];

  print "<pre>\n";
  foreach ($pares as $valor) {
    print "<p>$valor</p>\n";
  }

  ?>
  <h3> 2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
    matriz. Mostrar el esquema del array con print_r().</h3>

  <?php
  $matriz = ["Pedro", "Ana", 34, 1];
  print "<pre>\n";
  print_r($matriz);
  ?>
  <h3> 3.Crear un array asociativo e introducir los siguientes valores:
    Nombre: Pedro
    Apellido: Torres
    Dirección: Av. Mayor 3703
    Teléfono: 1122334455.
    ->Ver respuesta en el código.
  </h3>
  <?php
  $asociativo = [
    'Nombre:' => "Pedro",
    'Apellido:' => "Torres",
    'Dirección:' => "Av. de Mayo" . 3703,
    'Teléfono:' => 1122334455,
  ];
  ?>
  <h3>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
    Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
    Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h3>
  <?php

  $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];

  foreach ($ciudades as $indice => $valor) {
    print "<pre>\n";
    print "<p>La ciudad con el índice $indice tiene el nombre $valor.</p>\n";
  }
  ?>
  <h3>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
    LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
    Ejemplo: El índice de Madrid es MD.</h3>
  <?php
  $ciudades = [
    'Madrid' => "MD",
    'Barcelona' => "BCL",
    'Londres' => "LD",
    'New York' => "NY",
    'Los Angeles' => "LA",
    'Chicago' => "CCG",
  ];

  foreach ($ciudades as $indice => $valor) {
    print "<pre>\n";
    print "<p> El índice de $indice es $valor.</p>";
  }

  ?>

</body>
<hr>
<footer>Angie Caprarulo para Potrero Digital Backend</footer>

</html>