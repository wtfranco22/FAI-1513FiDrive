
<?php
include_once("../../estructura/cabecera.php");
include_once("../../../control/control.php");
?>
<div id="accion4" name="accion4" class="col-md-9 col-lg-10 bg-light">
    <?php
    $datos = data_submitted();
    $obj = new control();
    $respuesta = $obj->validarDatos2($datos);
    echo "<h2>".$respuesta."</h2>";
    ?>
    <br/>
    <a class="btn btn-outline-primary" href="index4.php">volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>