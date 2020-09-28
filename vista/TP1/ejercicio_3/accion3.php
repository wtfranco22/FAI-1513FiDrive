
<?php
include_once("../../estructura/cabecera.php");
?>
<div id="accion3" name="accion3" class="col-md-9 col-lg-10 bg-light">
    <?php
    $datos = data_submitted();
    $obj = new control();
    $respuesta = $obj->validarDatos1($datos);
    echo "<h2>".$respuesta."</h2>";
    ?>
    <br/>
    <a class="btn btn-outline-primary" href="index3.php">volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>