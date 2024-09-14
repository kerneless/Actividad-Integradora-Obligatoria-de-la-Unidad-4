<?php

$urlBlog = "https://sanpedroeneltiempo.blogspot.com/"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">



    <!-- El título es declarado siempre antes de incluir header.php -->
    <title><?php echo $titulo ?> | Las fotos de mi abuelo</title> 
</head>
<body>
    <header>
        <h1><a href="index.php">Las fotos de mi abuelo</a></h1>
    <nav>
        <ul>
            <li><a href="index.php">Galeria</a></li>
            <li><a href="acerca.php">¿Quién es mi abuelo?</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        <a href=<?php echo $urlBlog ?>>Blog personal</a>
    </nav>

    <hr>
    </header>

    <!-- Nuevamente el título -->
    <h2><?php echo $titulo ?></h2>

