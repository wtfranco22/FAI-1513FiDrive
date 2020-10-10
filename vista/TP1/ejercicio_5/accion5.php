
<?php
include_once("../../estructura/cabecera.php");
include_once("../../../configuracion.php");
?>

    <?php
    $datos = data_submitted();
    $obj = new control();
    $respuesta = $obj->validarDatos3($datos);
    echo "<h2>".$respuesta."</h2>";
    ?>
    <br/>
    <a class="btn btn-outline-primary" href="tp1eje5.php">volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>