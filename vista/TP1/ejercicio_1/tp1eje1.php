<?php
include_once("../../estructura/cabecera.php");
?>


    <form class="col-md-4" id="tp1eje1" name="tp1eje1" method="post" data-toggle="validator" action="accion1.php" autocomplete="off">
        <div class="form-group">
            <label for="numero"> n&uacute;mero: </label>
            <input type="text" id="numero" name="numero" placeholder="ingresar numero" class="form-control" />
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