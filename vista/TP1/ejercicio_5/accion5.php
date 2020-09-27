
<?php
include_once("../../estructura/cabecera.php");
include_once("../../../control/control.php");
?>
<div id="accion5" name="accion5" class="col-md-9 col-lg-10 bg-light">
    <?php
    $datos = data_submitted();
    $obj = new control();
    $respuesta = $obj->validarDatos3($datos);
    echo "<h2>".$respuesta."</h2>";
    ?>
    <br/>
    <a class="btn btn-outline-primary" href="index5.php">volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>