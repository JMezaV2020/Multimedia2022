<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Procesar pag.php" method= "GET" > 
    <label for="nombre"> Nombre: </label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label for="apellido"> Apellido: </label>
    <input type="text" name="apellido" id="apellido">
    <input type="submit" value="Enviar formulario">
    <hr>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia2022";

$conexion = mysqli_connect($host, $user, $pass, $db);

$consulta = "SELECT * FROM usuarios";

$resultado = mysqli_query($conexion, $consulta);

while($fila = mysqli_fetch_assoc($resultado)){
    echo $fila["nombre"]. " ". $fila["apellido"] . "<br>";
};
?>
</form>
</body>
</html>