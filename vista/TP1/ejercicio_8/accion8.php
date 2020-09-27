
<?php
include_once("../../estructura/cabecera.php");
include_once("../../../control/control.php");
?>
<div id="accion8" name="accion8" class="col-md-9 col-lg-10 bg-light">
    <?php
    $datos = data_submitted();
    $obj = new control();
    $respuesta = $obj->valorCine($datos);
    echo "<h2>".$respuesta."</h2>";
    ?>
    <a class="btn btn-primary" href='index8.php'>volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>