<?php

function obtenerComentarios($fotoId)
{

 include("credenciales.php");
 $conexion = mysqli_connect($hostname, $user, $password, $db);
 $query = "SELECT * FROM comentarios WHERE id_foto = $fotoId ORDER BY id DESC";
 $resultado = mysqli_query($conexion, $query);
 mysqli_close($conexion);

 $comentarios = array();

 while ($comentario = mysqli_fetch_assoc($resultado)) {
  $comentarios[] = $comentario;
 }

 return $comentarios;
}
function mostrarComentarios($fotoId)
{
 $comentarios = obtenerComentarios($fotoId);
 $formHtml = "";

 if (count($comentarios)) {

  $formHtml = "<h2>Comentarios</h2>";
  foreach ($comentarios as $comentario) {

   $formHtml .= "
   <div class='comentario'> 
   <div class='comentario-header'>
   <p class='comentario-nombre'><b>" . $comentario['nombre'] . " </b></p>
   <p class='comentario-email'><i>" . $comentario["email"] . "</i></p>
   </div>
   <p class='comentario-comentario'>" . $comentario["comentario"] . "</p>
   <p class='comentario-fecha'>" . $comentario["fecha"] . "</p>
   </div>
   <hr>
   ";
  }
 }
 echo $formHtml;
}
