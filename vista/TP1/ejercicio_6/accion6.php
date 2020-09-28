
<?php
include_once("../../estructura/cabecera.php");
?>
<div id="accion6" name="accion6" class="col-md-9 col-lg-10 bg-light">
    <?php
    $datos = data_submitted();
    $obj = new control();
    $respuesta = $obj->validarDatos4($datos);
    echo "<h2>".$respuesta."</h2>";
    ?>
    <br/>
    <a class="btn btn-primary" href="index6.php" >volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>