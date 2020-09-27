<?php
include_once("../../estructura/cabecera.php");
?>

<div class="col-md-9 col-lg-10 bg-light">
    <form id="eje6" name="eje6" action="accion6.php" autocomplete="off" method="POST" data-toggle="validator">
        <div class="col-md-6 form-group">
            <label for="nombre">Nombre:</label>
            <input text="text" class="form-control" id="nombre" name="nombre" />
        </div>
        <div class="col-md-6 form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" />
        </div>
        <div class="col-sm-2 form-group">
            <label for="edad">Edad:</label>
            <input type="number" class="form-control" id="edad" name="edad" />
        </div>

        <div class="col-md-6 form-group">
            <label for="direccion">Direcci&oacute;n:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" />
        </div>
        <fieldset class="col-sm-6">
            <h4>Estudios</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="sinEstudio" name="estudio" value="sin estudio" required>
                <label class="form-check-label" for="sinEstudio">Sin estudio</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="primario" name="estudio" value="primario" required>
                <label class="form-check-label" for="primario">Estudio primario</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="secundario" name="estudio" value="secundario" required>
                <label class="form-check-label" for="secundario">Estudio secundario</label>
            </div>
        </fieldset>
        <div class="col-md-6 form-group">
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" class="form-control">
                <option value="">Según DNI</option>
                <option>Femenino</option>
                <option>Masculino</option>
            </select>
        </div>
        <fieldset class="col-sm-6">
            <h4>Deportes</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="deportes[]" value="futbol">
                <label class="form-check-label" for="futbol">futbol</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="checkbox" name="deportes[]" value="basket">
                <label class="form-check-label" for="basket">basket</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="checkbox" name="deportes[]" value="tennis">
                <label class="form-check-label" for="tennis">tennis</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="checkbox" name="deportes[]" value="voley">
                <label class="form-check-label" for="voley">voley</label>
            </div>
        </fieldset>
        <div>
            <input type="reset" value="Borrar todo" class="btn btn-danger" />
            <span style="float:right"><input type=submit value="Enviar" class="btn btn-success" /></span>
        </div>
    </form>
</div>


<?php
include_once("../../estructura/pie.php");
?>