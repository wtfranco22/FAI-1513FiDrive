
<?php
include_once("../../estructura/cabecera.php");
include_once("../../../control/control.php");
?>

<div class="col-md-9 col-lg-10 bg-light">
    <?php
    $datos = data_submitted();
    $obj = new control();
    $respuesta = $obj->verNumero($datos);
    echo "<h2>".$respuesta."</h2>";
    ?>
    <br/>
    <a class="btn btn-primary" href="index1.php">volver</a>
</div>


<?php
include_once("../../estructura/pie.php");
?>