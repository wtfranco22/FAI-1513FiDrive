<?php
include_once("../../estructura/cabecera.php");
?>


    <form id="tp3eje1" name="tp3eje1" action="accion1.php" method="POST" data-toggle="validator" enctype="multipart/form-data">
        <div class="form-group">
            <input type="file" class="form-control-file" id="archivo" name="archivo">
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