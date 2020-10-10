<?php
include_once("estructura/cabecera.php");
include_once('../configuracion.php');
?>


<?php
$archivos = new archivo();
$carpeta = '../archivos';
$archivos = $archivos->obtenerArchivos($carpeta);

?>
<h1 class="text-center m-5">
    Estos son los archivos almacenados en el servidor
</h1>
<div class="row">
    <?php
    /*foreach ($archivos as $archivo) {
        if (strlen($archivo) > 2) {
            echo "<div class='col-md-2 mb-3'>";
            echo "<img alt='$archivo' class='' src='../archivos/$archivo'  width='100%' height=80%'>";
            //echo "<input type='submit' name='Seleccion:$archivo' id='Seleccion:$archivo' class='btn btn-secondary btn-block' value='ver'></input>";
            echo "</div>";
        }
    }*/
    ?>
</div>
<?php
$archivos = new archivo();
echo "<div class='row'>";
echo "<div class='col-md-6'>";
echo $archivos->obtener_estructura_directorios('../archivos');
echo "</div>";
?>
<div class="col-md-6">
    <button class="btn btn-dark" data-toggle="collapse" data-target="#contenido">Nueva carpeta</button>
    <form id="contenido" class="collapse" name="contenido" action="accion1.php" method="POST" data-toggle="validator">
        <label for="nombreCarpeta">Nueva carpeta en:</label>
        <input type="text" id="nombreCarpeta" name="nombreCarpeta" class="form-control" placeholder="Ingrese el nombre de la nueva carpeta">
        <input type="hidden" class="form-control" id="ubicacion" name="ubicacion" value="../archivos/">
        <div>
            <input type="hidden" class="form-control" id="ubicacion" name="ubicacion" value="../archivos/">
            <button type="submit" class="fa fa-plus btn btn-primary"> Crear carpeta</button>
        </div>
</div>
</form>
</div>

</div>

<?php
include_once("estructura/pie.php");
?>