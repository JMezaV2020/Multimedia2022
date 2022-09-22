<?php

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];

$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia2022";

$conexion = mysqli_connect($host, $user, $pass, $db);
$insert = "INSERT INTO `usuarios` (`id`, `nombre`, `apellido`) VALUES (NULL, '$nombre', '$apellido')";
$resultado = mysqli_query($conexion, $insert);
while($fila = mysqli_fetch_assoc($resultado)){
    echo $fila["nombre"]. " ". $fila["apellido"] . "<br>";
};

?>