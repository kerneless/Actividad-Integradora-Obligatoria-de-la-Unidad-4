<?php

function generarFormComentarios($idFoto)
{
 echo "
 <section class='caja-comentarios'>
 <h2>Dejá tu comentario</h2>
 <form action='enviar_comentario.php?idFoto=$idFoto' method='POST'>
  <label for='nombre'>Nombre</label>
  <input type='text' placeholder='Tu nombre' name='nombre' required>
  <label for='email'>Correo electrónico (opcional)</label>
  <input type='email' placeholder='Tu correo electrónico' name='email'>
  <label for='nombre'>Comentario</label>
  <textarea name='comentario' placeholder='Tu comentario' required></textarea>

  <input type='submit' value='Enviar comentario'>

 </form>
</section>
 
 ";
}
