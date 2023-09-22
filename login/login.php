<?php
$usuario = $_POST ['usuario'];
$contrasenia = $_POST ['contrasenia'];

$ckusuario = "Angie";
$ckcontrasenia = 1234;

if ($usuario==$ckusuario && $contrasenia==$ckcontrasenia){
  header('Location:https://www.potrerodigital.org/');
}else{
  echo "Incorrecto";
  header ('Location:https://www.gog.com/404');
}
