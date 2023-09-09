<!DOCTYPE html>
<html lang="es-ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP N°1 Potrero Digital Backend</title>
</head>

<body>

  <h1>Trabajo Practico N°1 para Potrero Digital Backend</h1>
  <h2>1.Imprima por pantalla :"Hola Mundo".</h2>

  <?php

  echo "Hola Mundo" . "<br/>";
  ?>
  <h2>2.Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</h2>
  <?php


  $saludo = " Hola Mundo";
  echo $saludo . "<br/>";

  ?>
  <h2>3.Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
    entera y el resto de la división entera.</h2>
  <?php


  $integer_1 = 2;
  $integer_2 = 3;
  $suma = $integer_1 + $integer_2;
  $resta = $integer_1 - $integer_2;
  $multiplicación = $integer_1 * $integer_2;
  $división_entera = $integer_1 / $integer_2;
  $resto_división_entera = $integer_1 % $integer_2;

  echo $suma . "<br/>";
  echo $resta . "<br/>";
  echo $multiplicación . "<br/>";
  echo $división_entera . "<br/>";
  echo $resto_división_entera . "<br/>";
  ?>
  <h2>4.Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
    pantalla.</h2>

  <?php

  $C = 20;
  $F = ($C * 9 / 5) + 32;

  echo $F . "<br/>";
  ?>
  <h2>5.
    Implementar algoritmos que permitan:<br>
    a.Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.<br>
    b.Calcular el perímetro y el área de un círculo dado que su radio es de 30cm<br>
  </h2>
  <?php


  $L1 = 18;
  $L2 = 12;
  $perimetro_rectangulo = ($L1 + $L2) * 2;

  echo $perimetro_rectangulo . "<br/>";

  $area_rectangulo = $L1 * $L2;
  echo $area_rectangulo . "<br/>";



  $PI = 3.1416;
  $radio = 30;
  $perimetro_circulo = (2 * $PI) * $radio;

  echo $perimetro_circulo . "<br/>";

  $area_circulo = $PI * ($radio ** 2);
  echo $area_circulo . "<br/>";


  ?>
  <h2>Maria Angelica Caprarulo</h2>

</body>

</html>