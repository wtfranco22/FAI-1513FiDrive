<?php
include_once("../../estructura/cabecera.php");
include_once("../../../configuracion.php");
?>

    <h2>El nuevo archivo: </h2>
    <?php
    $datos = data_submitted();
    $obj = new archivo();
    if($datos['clave']=='null'){
        $respuesta = $obj->armarchivo('alta',$datos);
    }else{
        $respuesta = $obj->armarchivo('modificar',$datos);
    }
    echo $respuesta;
    ?>
    <br />
    <a class="btn btn-primary" href='armarchivo.php'>volver</a>
</div>

<?php
include_once("../../estructura/pie.php");
?>