<?php
include_once("../../estructura/cabecera.php");
?>
<div id="accion2" name="accion2" class="col-md-9 col-lg-10 bg-light">
    <h2>Archivo Subido: </h2>
    <?php
    $obj = new archivo();
    $respuesta=$obj->leerarchivo();
    echo $respuesta["detalles"];
    ?>
    <textarea class="w-100" rows="20" >
        <?php
        echo $respuesta["contenido"];
        ?>
    </textarea>
    <br />
    <a class="btn btn-primary" href='tp3eje2.php'>volver</a>
</div>


<?php
include_once("../../estructura/pie.php");
?>