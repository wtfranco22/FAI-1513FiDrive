
<?php
include_once("../../estructura/cabecera.php");
include_once("../../../configuracion.php");
?>


    <?php
    $datos = data_submitted();
    $obj = new control();
    $respuesta = $obj->verNumero($datos);
    echo "<h2>".$respuesta."</h2>";
    ?>
    <br/>
    <a class="btn btn-primary" href="tp1eje1.php">volver</a>
</div>


<?php
include_once("../../estructura/pie.php");
?>