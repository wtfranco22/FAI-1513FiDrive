<?php
include_once("../../estructura/cabecera.php");
?>

<div class="col-md-9 col-lg-10 bg-light">
    <form id="eje1" name="eje1" method="post" data-toggle="validator" action="accion1.php" autocomplete="off">
        <div class="col-md-4 form-group">
            <label for="numero"> n&uacute;mero: </label>
            <input type="text" id="numero" name="numero" placeholder="ingresar numero" class="form-control"/>
        </div>
        <div><input type="submit" class="btn btn-primary" value="enviar"></div>
    </form>
</div>
<?php
include_once("../../estructura/pie.php");
?>