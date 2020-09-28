<?php
include_once("../../estructura/cabecera.php");
?>

<div class="col-md-9 col-lg-10 bg-light">
    <form class="col-md-6" id="eje4" name="eje4" action="accion4.php" autocomplete="off" method="POST" data-toggle="validator" novalidate>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre"/>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" />
        </div>

        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" class="col-md-4 form-control" id="edad" name="edad"/>
        </div>

        <div class="form-group">
            <label for="direccion">Direcci&oacute;n:</label>
            <input type="text" class="form-control" id="direccion" name="direccion"/>
        </div>
        <div class="clearfix">
            <button type="reset" class="btn btn-danger float-left">Borrar</button>
            <button type="submit" class="btn btn-primary float-right">Enviar</button>
        </div>
    </form>
</div>


<?php
include_once("../../estructura/pie.php");
?>