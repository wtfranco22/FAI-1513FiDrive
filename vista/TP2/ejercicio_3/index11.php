<?php
include_once("../../estructura/cabecera.php");
?>

<div class="col-md-9 col-lg-10 bg-white">

    <form class="row justify-content-around" id="eje11" name="eje11" method="POST" action="accion11.php" data-toggle="validator" autocomplete="off">
        <div class="bg-dark p-4 m-5 shadow">
            <div class="bg-light p-4">
                <h1 class="m-5">Iniciar sesi&oacute;n</h1>
                <div class="form-group">
                    <input type="text" id="usuario" name="usuario" class="m-2 placeicon form-control shadow" placeholder="&#xf007; Usuario">
                </div>
                <div class="form-group">
                    <input type="text" id="clave" name="clave" class="m-2 placeicon form-control shadow" placeholder="&#xf023; Contraseña">
                </div>
                <div>
                    <button type="submit" class="m-2 btn btn-success btn-block shadow">Iniciar sesión</button>
                </div>
            </div>
        </div>
    </form>
</div>


<?php
include_once("../../estructura/pie.php");
?>