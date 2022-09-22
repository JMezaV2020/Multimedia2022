<?php

//TIPOS DE DATOS

/*ENTEROS O INTEGER
  FLOTANTE O FLOAT
  DOBLES O DOUBLE
  */

$variable = 0; //es falso, 1 o n es verdadero boolean

echo "numero 1: ".$numero_1 = 5;
echo "<br>";
echo "numero 1: ".$numero_2 = 2;
echo "<br>";
echo "Resta: ";
echo $numero_1 - $numero_2;
echo "<br>";
echo "Multiplicacion: ";
echo $numero_1 * $numero_2;
echo "<br>";
echo "Division: ";
echo $numero_1 / $numero_2;
echo "<br>";
echo "Modulo: ";
echo $numero_1 % $numero_2;
echo "<br>";
echo "Potencia: ";
echo $numero_1 ** $numero_2;
echo "<br>";

$a = 1;
$b = 2;
$c = 1;

echo "Con mas: ".  (-$b + sqrt($b**2 - 4*$a*$c))/2*$a;
echo "<br>";
echo "Con menos: ".(-$b - sqrt($b**2 - 4*$a*$c))/2*$a;
echo "<br>";

//Operadores logicos

//AND O &&
//OR O ||
//NOT !

//RELACIONALES
// <, >, <=, >=, ==, !=, ===

//condicional

//if (condicion){
//  code
//}

//Arreglo
$arreglo = array("Pedro", "Juan", "Diego");
echo "<pre>";
print_r ($arreglo);
echo "</pre>";

$arreglo2 = array(
  "juan" => "Perez",
  "Pedro" => "Gonzales",
  "Maria" => "Lopez"
);
echo "<pre>";
print_r ($arreglo2);
echo "</pre>";

//Recorrer arreglo

$arreglo3 = ["nombre: " => "juan",
"edad: " => 21,
"ocupacion: " => "desarrollador web"
];

foreach($arreglo3 as $value){
  echo $value;
  echo "<br>";
};

foreach($arreglo3 as $key => $value){
  echo $key.$value."<br>";
};

$arreglo4 = [
["nombre: " => "juan", "edad: " => 21, "ocupacion: " => "desarrollador web"], 
["nombre: " => "Pedro", "edad: " => 36, "ocupacion: " => "Vendedor"], 
["nombre: " => "Diego", "edad: " => 25, "ocupacion: " => "Estudiante"]];

foreach($arreglo4 as $key => $value){
 foreach($value as $key2 => $value2){
  print_r($key2.$value2."<br>");
 }
};

$arreglo5 = [
  []
]

?>