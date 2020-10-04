
<?php
include_once("../../estructura/cabecera.php");
?>
<div id="accion1" name="accion1" class="col-md-9 col-lg-10 bg-light">
    <?php
    $datos = data_submitted();
    $obj = new usuario();
    $respuesta = $obj->validarUsuario($datos);
    echo "<h2>".$respuesta."</h2>";
    ?>
    <br/>
    <a class="btn btn-primary" href='tp2eje1.php'>volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>