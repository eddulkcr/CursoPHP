<?php
#prueba de la variable numerica
$numero = 5;
echo  "este es el resultado:  $numero <br> ";
var_dump($numero);
echo"<br><br>";

#variable de texto
$palabra = "palabra";
echo "este es una cadena de texto; $palabra <br> ";
var_dump($palabra);
echo"<br><br>";

#variable tipo boleana
$boleana = true;
echo "esto es una variable boleana: $boleana <br> ";
var_dump($boleana);
echo"<br><br>";

#variable de tipo arreglo
$colores = array("azul","rojo");
echo "esto es un arreglo $colores[0]"
/*
#variable arreglo con propiedades
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "esto es una variable $verduras[verdura1]"; 
echo"<br><br>";

$frutas =(object)["fruta1"=>"pera", "fruta2"=>"manzana"];
echo "esta es una variable de frutas $frutas->fruta1";
*/

?> 