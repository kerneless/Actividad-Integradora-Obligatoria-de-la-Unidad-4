<?php

$titulo = "¿Quién es mi abuelo?";

include("header.php");

$informacion = "Mi abuelo fue fotógrafo hasta el año 2007, y durante 40 años su cámara fue una extensión de su mirada curiosa y detallista. <br>
Aunque se retiró de la fotografía profesional, la pasión de mi abuelo por esta disciplina sigue intacta. Lo más genial es que se lleva de maravilla con la tecnología y, lejos de quedarse atrás, tiene su propio blog donde comparte historias, experiencias y consejos. ¡No hay quién lo pare! Su cámara puede haber cambiado, pero su amor por contar historias sigue tan vivo como siempre, solo que ahora lo hace también en el mundo digital.<br>Este sitio es un pequeño homenaje a su increíble trayectoria y, al mismo tiempo, el puntapié para migrar su blog a un sitio propio, donde pueda seguir inspirando a otros con su trabajo y su inagotable energía.";
$foto = "hugo.jpg";


?>

<section class="split">
    <p> <?php echo $informacion ?></p>
    <img src="<?php echo $foto ?>" alt="Foto de mi abuelo Hugo" class="perfil-hugo">    
</section>
<?php
include("footer.php"); 
?>