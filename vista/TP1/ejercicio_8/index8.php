<?php
include_once("../../estructura/cabecera.php");
?>

<div class="col-md-9 col-lg-10 bg-light">
    <form class="col-md-6 col-sm-8" id="eje8" name="eje8" action="accion8.php" autocomplete="off" method="POST" data-toggle="validator">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre"/>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido"/>
        </div>

        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="text" class="col-md-4 form-control" id="edad" name="edad"/>
        </div>
        <fieldset>
            <h4>Estudiante</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="sinEstudio" name="estudiante" value="n">
                <label class="form-check-label" for="n">NO</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="primario" name="estudiante" value="s">
                <label class="form-check-label" for="s">SI</label>
            </div>
        </fieldset>
        <div class="clearfix">
            <button type="reset" class="btn btn-danger float-left">Borrar</button>
            <button type="submit" class="btn btn-primary float-right">Enviar</button>
        </div>
    </form>
</div>


<?php
include_once("../../estructura/pie.php");
?>