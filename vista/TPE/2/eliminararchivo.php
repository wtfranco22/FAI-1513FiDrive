<?php
include_once("../../estructura/cabecera.php");
?>


    <form id="eliminararchivo" name="eliminararchivo" action="accion4.php" method="POST" data-toggle="validator">
        <div class="form-group">
            <label for="nombre"> Nombre del archivo: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="1234.png" readonly>
        </div>
        <div class="form-group">
            <label for="motivo"> Motivo de eliminar: </label>
            <input type="text" class="form-control" id="motivo" name="motivo" placeholder="Motivo">
        </div>
        <div class="form-group">
            <label for="usuario"> Usuario </label>
            <select id="usuario" name="usuario" class="form-control">
                <option value=""> Tipo de usuario </option>
                <option value="Administrador"> Administrador </option>
                <option value="Visitante"> Visitante </option>
                <option value="Yo"> Yo </option>
            </select>
        </div>
        <div class="clearfix">
            <button type="reset" class="btn btn-danger float-left">Borrar Todo</button>
            <button type="submit" class="btn btn-primary float-right">Enviar</button>
        </div>
    </form>
</div>

<?php
include_once("../../estructura/pie.php");
?>