<?php
include_once("../../estructura/cabecera.php");
?>
<div id="accion3" name="accion3" class="col-md-9 col-lg-10 bg-light">
    <h1 class="text-primary">La película introducida es </h1>
    <p class="text-success">
        <?php
        $datos = data_submitted();
        $obj = new archivo();
        $respuesta = $obj->cargarPelicula($datos);
        echo $respuesta;
        ?>
    </p>
    <a class="btn btn-primary" href='index3.php'>volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>