<?php
include_once("../../estructura/cabecera.php");
?>



    <form class="row justify-content-around" id="tp2eje1" name="tp2eje1" method="POST" action="accion1.php" data-toggle="validator" autocomplete="off">
        <div class="bg-dark p-4 m-5 shadow">
            <div class="bg-light p-4">
                <h1 class="m-5">Iniciar sesión</h1>
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