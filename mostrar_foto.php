<?php
function obtenerDataDeFotos($idFoto = NULL)
{
    $RUTA_FOTOS = "fotos";
    $data =  array(
        array(
            "id" => "0",
            "url" => $RUTA_FOTOS . "/0.jpg",
            "titulo" => "Navarro",
            "año" => "1994"
        ),
        array(
            "id" => "1",
            "url" => $RUTA_FOTOS . "/1.jpg",
            "titulo" => "Fernando García Curten",
            "año" => "1980"
        ),
        array(
            "id" => "2",
            "url" => $RUTA_FOTOS . "/2.jpg",
            "titulo" => "Alfredo Alcón",
            "año" => "1989"
        ),
        array(
            "id" => "3",
            "url" => $RUTA_FOTOS . "/3.jpg",
            "titulo" => "Iglesia Nuestra Serñora del Socorro",
            "año" => "2020"
        ),
        array(
            "id" => "4",
            "url" => $RUTA_FOTOS . "/4.jpg",
            "titulo" => "Negro Gimenez",
            "año" => "1974"
        ),
        array(
            "id" => "5",
            "url" => $RUTA_FOTOS . "/5.jpg",
            "titulo" => "Jorge Luis Borges",
            "año" => "1982"
        )

    );

    if (isset($idFoto)) {
        $data = $data[$idFoto];
    }


    return $data;
}

function mostrarFoto($id)
{
    $fotos = obtenerDataDeFotos();
    echo "<img class='img-detalle' src=" . $fotos[$id]['url'] . "></img>";
}

function generarGaleria()
{
    $fotos = obtenerDataDeFotos();
    echo "<section class='galeria'>";
    foreach ($fotos as $foto) {

        // Pasamos el idFoto vía GET a detalle.php
        $href = "detalle.php?idFoto=" . $foto["id"];
        echo "<a href='" . $href . "'>";

        mostrarFoto($foto["id"]);
        echo "</a>";
    }
    echo "</section>";
}

function generarDetalle($id)
{
    echo "<section class='detalle'>";
    mostrarFoto($id);
    echo "</section>";
}
