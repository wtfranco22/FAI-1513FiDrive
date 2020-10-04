<?php
include_once("../../estructura/cabecera.php");
?>

<div class="col-md-9 col-lg-10 bg-light">
    <form class="col-md-6" id="tp1eje6" name="tp1eje6" action="accion6.php" autocomplete="off" method="POST" data-toggle="validator">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input text="text" class="form-control" id="nombre" name="nombre" />
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" />
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" class="col-md-4 form-control" id="edad" name="edad" />
        </div>

        <div class="form-group">
            <label for="direccion">Direcci&oacute;n:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" />
        </div>
        <fieldset>
            <h4>Estudios</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="sinEstudio" name="estudio" value="sin estudio">
                <label class="form-check-label" for="sinEstudio">Sin estudio</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="primario" name="estudio" value="primario">
                <label class="form-check-label" for="primario">Estudio primario</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="secundario" name="estudio" value="secundario">
                <label class="form-check-label" for="secundario">Estudio secundario</label>
            </div>
        </fieldset>
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" class="form-control">
                <option value="">Según DNI</option>
                <option>Femenino</option>
                <option>Masculino</option>
            </select>
        </div>
        <fieldset>
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
        <div class="clearfix">
            <button type="reset" class="btn btn-danger float-left">Borrar</button>
            <button type="submit" class="btn btn-primary float-right">Enviar</button>
        </div>
    </form>
</div>


<?php
include_once("../../estructura/pie.php");
?>