
<?php
include_once("../../estructura/cabecera.php");
?>
<div id="accion4" name="accion4" class="col-md-9 col-lg-10 bg-light">
<h2>Eliminar Archivo: </h2>
    <?php
    $datos = data_submitted();
    $obj = new archivo();
    $respuesta= $obj->eliminararchivo($datos);
    echo $respuesta;
    ?>
    <br/>
    <a class="btn btn-primary" href='eliminararchivo.php'>volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>
