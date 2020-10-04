<?php
include_once("../../estructura/cabecera.php");
?>

<div class="p-3 col-md-9 col-lg-10 bg-white">
    <form id="armarchivo" name="armarchivo" action="accion1.php" method="POST" data-toggle="validator">
        <div class="form-group">
            <label for="nombre"> Nombre del archivo: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="1234.png">
        </div>
        <div class="form-group">
            <label for="descripcion"> Descripción: </label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
        </div>
        <div class="form-group">
            <label for="usuario"> Usuario </label>
            <select id="usuario" name="usuario" class="form-control">
                <option value=""> Tipo de usuario </option>
                <option value="administrador"> Administrador </option>
                <option value="visitante"> Visitante </option>
                <option value="yo"> Yo </option>
            </select>
        </div>
        <div class="form-check-inline">
            <input type="radio" class="form-check-input" id="img" name="tipo" value="img">
            <i class="fa fa-picture-o" aria-hidden="true"></i>
            <label for="img"> Imagen </label>
        </div>
        <div class="form-check-inline">
            <input type="radio" class="form-check-input" id="zip" name="tipo" value="zip">
            <i class="fa fa-file-archive-o" aria-hidden="true"></i>
            <label for="zip"> Zip </label>
        </div>
        <div class="form-check-inline">
            <input type="radio" class="form-check-input" id="doc" name="tipo" value="doc">
            <i class="fa fa-file-word-o" aria-hidden="true"></i>
            <label for="doc"> Doc </label>
        </div>
        <div class="form-check-inline">
            <input type="radio" class="form-check-input" id="pdf" name="tipo" value="pdf">
            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
            <label for="pdf"> PDF </label>
        </div>
        <div class="form-check-inline">
            <input type="radio" class="form-check-input" id="xls" name="tipo" value="xls">
            <i class="fa fa-file-excel-o" aria-hidden="true"></i>
            <label for="xls"> XLS </label>
        </div>
        <div class="form-group">
            <label for="clave"> Clave: </label>
            <div class="input-group">
                <input type="password" Class="form-control" id="clave" name="clave">
                <a id="ojo" class="btn btn-dark fa fa-eye-slash" onclick="mostrarClave()" href="#"></a>
            </div>
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