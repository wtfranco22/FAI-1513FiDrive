
<?php
include_once("../../estructura/cabecera.php");
include_once("../../../control/control.php");
?>
<div id="accion7" name="accion7" class="col-md-9 col-lg-10 bg-light">
    <?php
    $datos = data_submitted();
    $obj = new control();
    $respuesta = $obj->operacion($datos);
    echo "<h2>".$respuesta."</h2>";
    ?>
    <br/>
    <a class="btn btn-primary" href='tp1eje7.php'> volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>