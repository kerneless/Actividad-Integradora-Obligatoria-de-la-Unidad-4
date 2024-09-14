<?php
$titulo = "Error";
include("mostrar_foto.php");
include("obtener_comentarios.php");
include("form_comentarios.php");


$idFoto = "";

if (isset($_GET["idFoto"])) {
    $idFoto = $_GET["idFoto"]; //Obtenemos el id de la foto que viene vía GET desde mostrar_photo.php
}

if ($idFoto != "") {
    $fotoDetalle = obtenerDataDeFotos($idFoto);
    $titulo = $fotoDetalle["titulo"] . " (" . $fotoDetalle["año"] . ")";
    include("header.php");
    generarDetalle($idFoto);
    echo "<section class='comentarios'>";
    mostrarComentarios($idFoto);
    generarFormComentarios($idFoto);
    if (isset($_GET["ok"])) {
        echo "<h3>Comentario enviado con éxito.</h3>";
    }

    echo "</section> ";
} else {
    include("header.php");
    echo "Ups, llegaste a esta página sin haber establecido un id para la foto.";
}

include("footer.php");
