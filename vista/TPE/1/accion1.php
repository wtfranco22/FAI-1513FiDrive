
<?php
include_once("/FAI-1513FiDrive/vista/estructura/cabecera.php");
include_once("../../../configuracion.php");
?>

    <?php
    $datos = data_submitted();
    $obj = new control();
    $respuesta= $obj->prueba();
    echo "<h2>".$respuesta."</h2>";
    ?>
    <br/>
    <a class="btn btn-primary" href='index1.php'>volver</a>
</div>

<?php
include_once("/FAI-1513FiDrive/vista/estructura/pie.php");
?>
