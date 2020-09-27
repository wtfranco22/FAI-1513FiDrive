<?php
include_once("../../estructura/cabecera.php");
?>

<div class="col-md-9 col-lg-10 bg-light">
    <form id="eje3" name="eje3" action="accion3.php" autocomplete="off" method="POST" data-toggle="validator" novalidate>
        <div class="col-md-6 form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre"/>            
        </div>

        <div class="col-md-6 form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido"/>
        </div>

        <div class="col-sm-4 form-group">
            <label for="edad">Edad:</label>
            <input type="number" class="form-control" id="edad" name="edad"/>
        </div>

        <div class="col-md-6 form-group">
            <label for="direccion">Direcci&oacute;n:</label>
            <input type="text" class="form-control" id="direccion" name="direccion"/>
        </div>
        <div>
            <input type="reset" value="Borrar todo" class="btn btn-danger" />
            <span style="float:right"><input type=submit value="Enviar" class="btn btn-success" /></span>
        </div>
    </form>
</div>
<?php
include_once("../../estructura/pie.php");
?>