<?php

echo "hola mundo";
echo "<br>";

//variables
$a = "juan";
$b = "perez";

//conquetar
echo "hola"." ".$a." ".$b;
echo "<br>";
echo "<h1> Hola $a $b <br>";

//arreglo

$c = "kl";
print_r($c); // mas legible
echo "<br>";
var_dump($c); //mas informacion
echo "<br>";

//tarea 25/08/2022

$numero_1 = 10; //int
$numero_2 = 10.5; //float
$letra = "a"; //string
$verdadero = true; //boolean

var_dump($numero_1);
echo "<br>";
var_dump($numero_2);
echo "<br>";
var_dump($letra);
echo "<br>";
var_dump($verdadero);

//reglas
//variable
//no numeros al comenzar la variable, sin espacios, sin caracteres especiales, puede contener guiones bajos, no puede tener acentos
//lo mas significativo posible, nombre variable minusculas
//constante
//define("PI",3.141516)

?>