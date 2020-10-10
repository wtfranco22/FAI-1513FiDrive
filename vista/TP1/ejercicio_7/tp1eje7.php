<?php
include_once("../../estructura/cabecera.php");
?>


    <form class="col-md-4" id="tp1eje7" name="tp1eje7" action="accion7.php" autocomplete="off" method="POST" data-toggle="validator">
        <div class="form-group">
            <label for="nro1">Número 1: </label>
            <input type="text" class="form-control" id="nro1" name="nro1"/>
        </div>
        <div class="form-group">
            <label for="nro2">Número 2: </label>
            <input type="text" class="form-control" id="nro2" name="nro2"/>
        </div>
        <div class="form-group">
            <label for="operacion">Operación</label>
            <select id="operacion" name="operacion" class="form-control">
                <option value="sumar">Suma</option>
                <option value="restar">Resta</option>
                <option value="multiplicar">Multiplicación</option>
                <option value="dividir">División</option>
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