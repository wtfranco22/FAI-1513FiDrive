<?php
include_once("../../estructura/cabecera.php");
?>
<script src="js/validar_horario.js" type="text/javascript"></script>

    <form id="tp1eje2" name="tp1eje2" method="GET" action="accion2.php" onsubmit="return validarHora()" autocomplete="off">
        <table>
            <div class="text-center">
                <td></td>
                <td>Lunes</td>
                <td>Martes</td>
                <td>Miercoles</td>
                <td>Jueves</td>
                <td>Viernes</td>
            </tr>
            <tr>
                <td>Inicia</td>
                <td><input type="time" id="ini1" name="ini1"></td>
                <td><input type="time" id="ini2" name="ini2"></td>
                <td><input type="time" id="ini3" name="ini3"></td>
                <td><input type="time" id="ini4" name="ini4"></td>
                <td><input type="time" id="ini5" name="ini5"></td>
            </tr>
            <tr>
                <td>Finaliza</td>
                <td><input type="time" id="fin1" name="fin1"></td>
                <td><input type="time" id="fin2" name="fin2"></td>
                <td><input type="time" id="fin3" name="fin3"></td>
                <td><input type="time" id="fin4" name="fin4"></td>
                <td><input type="time" id="fin5" name="fin5"></td>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" class="btn btn-success" value="Anotar" />
                </td>
            </tr>
        </table>
    </form>
</div>


<?php
include_once("../../estructura/pie.php");
?>