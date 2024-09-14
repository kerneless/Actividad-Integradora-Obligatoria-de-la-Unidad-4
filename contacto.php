<?php

$titulo = "Contacto";
include("header.php");

?>
<section class="split">
    <form class="form-correo" action="enviar_correo.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Tu nombre" name="nombre">
        <label for="email">Correo electrónico</label>
        <input type="email" placeholder="Tu email" name="email">
        <label for="nombre">Mensaje</label>
        <textarea name="mensaje" placeholder="Tu mensaje"></textarea>

        <input type="submit" value="Enviar mensaje">

    </form>
    <img src="fotos/contacto.jpg" alt="Foto de José Arcuri.">
</section>


<?php
include("footer.php");
?>