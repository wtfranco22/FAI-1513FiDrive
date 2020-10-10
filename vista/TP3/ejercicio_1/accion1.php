<?php
include_once("../../estructura/cabecera.php");
include_once("../../../configuracion.php");
?>

    <h2>Archivo Subido: </h2>
    <?php
    $datos = data_submitted();
    $obj = new archivo();
    $respuesta = $obj->subirarchivo($datos);
    echo $respuesta;
    ?>
    <br />
    <a class="btn btn-primary" href='tp3eje1.php'>volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>