<?php
include_once("../../estructura/cabecera.php");
?>
<div id="accion1" name="accion1" class="col-md-9 col-lg-10 bg-light">
    <h2>El nuevo archivo: </h2>
    <?php
    $datos = data_submitted();
    $obj = new archivo();
    $respuesta = $obj->armarchivo($datos);
    echo $respuesta;
    ?>
    <br />
    <a class="btn btn-primary" href='armarchivo.php'>volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>