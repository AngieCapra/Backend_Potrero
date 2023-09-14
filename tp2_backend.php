<!DOCTYPE html>
<html lang="es-ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tp2_backend.php</title>
</head>

<body>
  <style>
    html {
      font-family: montserrat, arial, helvetica, sans-serif;
    }

    h1 {
      text-decoration: underline;
    }

    footer{
      font-family: 'Courier New', Courier, monospace;
    }
  </style>
  <h1>Trabajo Práctico N°2 Backend php</h1>
  <h2>1. Crear una variable n y validar que sea un número positivo.</h2>
  <p> n = 12 </p>
  <?php
  $n = 12;

  if ($n > 0) {
    echo "&#128079; $n es positivo.";
  } else {
    echo "&#128079; $n no es positivo.";
  }

  ?>
  <h2>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h2>
  <p>n = 7</p>
  <?php

  $n = 7;

  if ($n > 1 & $n < 10) {
    echo "&#128079; $n está dentro del rango esperado." . "<br/>";
  } else {
    echo "&#128079; $n está fuera del rango esperado." . "<br/>";
  }
  ?>
  <h2>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h2>
  <p>n = 33</p>
  <?php
  $n = 33;

  if ($n > 10 ||  $n < 2) {
    echo "&#128079; $n es mayor a 10 y menor a 2." . "<br/>";
  } else {
    echo " &#128079; $n no es ni mayor a 10 ni menor a 2." . "<br/>";
  }

  ?>
  <h2>4. Crear dos variables, una con nombre "numero1" y otra con el nombre de "numero2".<br>
    Si "numero1" es mayor a "numero2", mostrar por pantalla, la suma y la resta.<br>
    Si "numero2" es mayor a "numero1", mostrar por pantalla la multiplicación, la división entera y el resto de la división.<br>
    Si "numero1" y "numero2" son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h2>
  <p>numero1 = 3 y numero2 = 70</p>
  <?php
  $numero1 = 3;
  $numero2 = 70;
  if ($numero1 > $numero2) {
    echo "&#128079; Se muestra la suma y la resta entre ambas variables" . "<br/>";
    echo  $numero1 + $numero2 . "<br/>";
    echo  $numero1 - $numero2 . "<br/>";
  } elseif ($numero2 > $numero1) {
    echo "&#128079; Se muestran la multiplicación, la división y el resto entre ambas variables." . "<br/>";
    echo $numero1 * $numero2 . "<br/>";
    echo $numero1 / $numero2 . "<br/>";
    echo $numero1 % $numero2 . "<br/>";
  } elseif ($numero1 == $numero2) {
    echo "&#128079; Los números ingresados son iguales." . "<br/>";
  }
  ?>

</body>
<hr>
<footer>Angie Caprarulo para Potrero Digital Backend</footer>

</html>