<?php
include("credenciales.php");


$idFoto = $_GET["idFoto"];
$nombre =  $_POST["nombre"];
$email =  $_POST["email"];
$comentario =  $_POST["comentario"];


$conexion = mysqli_connect($hostname, $user, $password, $db);
$resultado = mysqli_query($conexion, "INSERT INTO comentarios (id_foto,nombre, email, comentario) VALUES ('$idFoto', '$nombre', '$email', '$comentario')");
mysqli_close($conexion);

header("Location: detalle.php?idFoto=$idFoto&ok");
