<?php
include_once("../../estructura/cabecera.php");
?>
</script>

<div class="p-3 col-md-9 col-lg-10 bg-white">
    <form class="p-5 shadow" id="tp3eje2" name="tp3eje2" action="accion1.php" method="POST" data-toggle="validator" enctype="multipart/form-data">
        <h2 class="p-3 bg-primary text-center text-white">Subir archivo .txt</h2>
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