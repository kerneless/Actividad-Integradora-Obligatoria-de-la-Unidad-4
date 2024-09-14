<?php

$adminMail = "reemplazar@gmail.com";
$asunto = "Alguien se contactó con nosotros desde el sitio web del abuelo.";

$nombre =  $_POST["nombre"];
$email =  $_POST["email"];
$mensaje =  $_POST["mensaje"];

mail($adminMail, $asunto, $mensaje);