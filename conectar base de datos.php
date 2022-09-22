<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia2022";

$conexion = mysqli_connect($host, $user, $pass, $db);

$consulta = "SELECT * FROM usuarios";

$resultado = mysqli_query($conexion, $consulta);

//forma 1
while($fila = mysqli_fetch_assoc($resultado)){
    echo $fila["nombre"]. " ". $fila["apellido"] . "<br>";
};
//forma 2
while($fila = mysqli_fetch_assoc($resultado)){
    foreach ($fila as $key => $valor){
        echo "<br>";
    }
}

//buscar diferencia procedural y una a objetos

?>