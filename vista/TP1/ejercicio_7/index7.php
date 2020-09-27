<?php
include_once("../../estructura/cabecera.php");
?>

<div class="col-md-9 col-lg-10 bg-light">
    <form id="eje7" name="eje7" action="accion7.php" autocomplete="off" method="POST" data-toggle="validator">
        <div class="col-md-8 form-group">
            <label for="nro1">Número 1: </label>
            <input type="text" class="form-control" id="nro1" name="nro1"/>
        </div>
        <div class="col-md-8 form-group">
            <label for="nro2">Número 2: </label>
            <input type="text" class="form-control" id="nro2" name="nro2"/>
        </div>
        <div class="col-md-6 form-group">
            <label for="operacion">Operación</label>
            <select id="operacion" name="operacion" class="form-control">
                <option value="sumar">Suma</option>
                <option value="restar">Resta</option>
                <option value="multiplicar">Multiplicación</option>
                <option value="dividir">División</option>
            </select>
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