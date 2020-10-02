<?php
include_once("../../estructura/cabecera.php");
?>
<div id="tp3accion1" name="tp3accion1" class="col-md-9 col-lg-10 bg-light">
    <h2>Archivo Subido: </h2>
    <?php
    $datos = data_submitted();
    $obj = new archivo();
    $respuesta = $obj->subirarchivo($datos);
    echo $respuesta;
    ?>
    <br />
    <a class="btn btn-primary" href='index1.php'>volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>