<?php
include_once("../../estructura/cabecera.php");
?>


    <form class="col-md-6" id="tp1eje5" name="tp1eje5" action="accion5.php" autocomplete="off" method="POST" data-toggle="validator">
        <div  class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" />
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" />
        </div>

        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="text" class="col-md-4 form-control" id="edad" name="edad" />
        </div>

        <div class="form-group">
            <label for="direccion">Direcci&oacute;n:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" />
        </div>
        <fieldset>
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
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" class="form-control">
                <option value="">Según DNI</option>
                <option>Femenino</option>
                <option>Masculino</option>
            </select>
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