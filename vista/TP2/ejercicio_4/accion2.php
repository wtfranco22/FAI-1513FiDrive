<?php
include_once("../../estructura/cabecera.php");
?>
<div id="accion2" name="accion2" class="col-md-9 col-lg-10 bg-light">
    <h1 class="text-primary">La película introducida es </h1>
    <p class="text-success">
        <?php
        $datos = data_submitted();
        $obj = new control();
        $respuesta = $obj->registrarPelicula($datos);
        echo $respuesta;
        ?>
    </p>
    <a class="btn btn-primary" href='tp2eje2.php'>volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>