<?php


class control
{

    public function prueba()
    {
        return "Este viaja al acción1.php, crea objeto, y viaja al control.php verificando los datos del index";
    }

    public function verNumero($datos)
    {
        $numero = $datos['numero'];
        if ($numero < 0) {
            $res = "El número es negativo";
        } else if ($numero == 0) {
            $res = "El número es cero";
        } else {
            $res = "El número es positivo";
        }
        return $res;
    }

    public function verHorario($datos)
    {
        $res = "";
        $cantHoras = "00:00";
        if ($datos["ini1"] != "null") {
            $ini = ($datos["ini1"]);
            $fin = ($datos["fin1"]);
            $cantHoras = date("H:i", strtotime($cantHoras) + strtotime($fin) - strtotime($ini));
            $res = $res . "Lunes desde las " . $ini . " hasta las " . $fin . "<br/>";
        }
        if ($datos["ini2"] != "null") {
            $ini = $datos["ini2"];
            $fin = $datos["fin2"];
            $cantHoras = date("H:i", strtotime($cantHoras) + strtotime($fin) - strtotime($ini));
            $res = $res . "Martes desde las " . $ini . " hasta las " . $fin . "<br/>";
        }
        if ($datos["ini3"] != "null") {
            $ini = $datos["ini3"];
            $fin = $datos["fin3"];
            $cantHoras = date("H:i", strtotime($cantHoras) + strtotime($fin) - strtotime($ini));
            $res = $res . "Miercoles desde las " . $ini . " hasta las " . $fin . "<br/>";
        }
        if ($datos["ini4"] != "null") {
            $ini =  $datos["ini4"];
            $fin =  $datos["fin4"];
            $cantHoras = date("H:i", strtotime($cantHoras) + strtotime($fin) - strtotime($ini));
            $res = $res . "Jueves desde las " . $ini . " hasta las " . $fin . "<br/>";
        }
        if ($datos["ini5"] != "null") {
            $ini = $datos["ini5"];
            $fin = $datos["fin5"];
            $cantHoras = date("H:i", strtotime($cantHoras) + strtotime($fin) - strtotime($ini));
            $res = $res . "Viernes desde las " . $ini . " hasta las " . $fin . "<br/>";
        }
        $res = $res . "Cantidad de horas cursadas " . $cantHoras . "<br/>";
        return $res;
    }

    public function validarDatos1($datos)
    {
        $nombre = $datos["nombre"];
        $apellido = $datos["apellido"];
        $edad = $datos["edad"];
        $direccion = $datos["direccion"];
        return "<b>Hola, yo soy " . $nombre . " " . $apellido . ". Tengo " . $edad . " años y vivo en " . $direccion . "</b>";
    }

    public function validarDatos2($datos)
    {
        $nombre = $datos["nombre"];
        $apellido = $datos["apellido"];
        $edad = $datos["edad"];
        $direccion = $datos["direccion"];
        $res = "<b> Hola, yo soy " . $nombre . " " . $apellido .
            "<br>Tengo " . $edad . " años<br>Soy ";
        if ($edad >= 18) {
            $res = $res . "mayor ";
        } else {
            $res = $res . "menor ";
        }
        return $res . "y vivo en " . $direccion . "</b>";
    }

    public function validarDatos3($datos)
    {
        $res = $this->validarDatos2($datos);
        $estudio = $datos["estudio"];
        $sexo = $datos["sexo"];
        $res .= "<b><br>Mi sexo es " . $sexo .
            " y mi situacion de estudio es " . $estudio . "</b> ";
        return $res;
    }
    public function validarDatos4($datos)
    {
        $res = $this->validarDatos3($datos);
        if (!empty($datos['deportes'])) {
            $contar = 0;
            $juego = "";
            foreach ($datos['deportes'] as $juega) {
                $juego .= $juega . ", ";
                $contar++;
            }
            $res .= "<b><br>Ademas juego a " . $juego . "realizo " . $contar . " deporte/s</b>";
        } else {
            $res .= "<b><br>No realizo deportes</b>";
        }
        return $res;
    }

    public function operacion($datos)
    {
        $nro1 = $datos["nro1"];
        $nro2 = $datos["nro2"];
        $operacion = $datos["operacion"];
        $res = "El resultado es igual a ";
        switch ($operacion) {
            case "sumar":
                $res .= $nro1 + $nro2;
                break;
            case "restar":
                $res .= $nro1 - $nro2;
                break;
            case "multiplicar":
                $res .= $nro1 * $nro2;
                break;
            case "dividir":
                if ($nro2 == 0) {
                    $res = "<h1>No se puede dividir por cero. Mal ahí!</h1>";
                } else {
                    $res .= $nro1 / $nro2;
                }
                break;
            default:
                $res = "EERRRROOOORRRR";
        }
        return $res;
    }

    public function valorCine($datos)
    {
        $nombre = $datos["nombre"];
        $apellido = $datos["apellido"];
        $edad = $datos["edad"];
        $estudiante = $datos["estudiante"];
        $res = "El precio de la entrada es de ";
        if ($edad < 12) {
            $res .= "$160";
        } else if ($estudiante == "s") {
            $res .= "$180";
        } else {
            $res .= "$300";
        }
        return $res;
    }

    public function registrarPelicula($datos)
    {
        $titulo = $datos["titulo"];
        $actores = $datos["actores"];
        $director = $datos["dire"];
        $guion = $datos["guion"];
        $produccion = $datos["produccion"];
        $anio = $datos["anio"];
        $nacionalidad = $datos["nacionalidad"];
        $genero = $datos["genero"];
        $duracion = $datos["duracion"];
        $edades = $datos["espectador"];
        $sinopsis = $datos["sinopsis"];
        $res =
            "<b>Titulo</b>: " . $titulo . "<br>" .
            "<b>Actores</b>: " . $actores . "<br>" .
            "<b>Director</b>: " . $director . "<br>" .
            "<b>Guión</b>: " . $guion . "<br>" .
            "<b>Producción</b>: " . $produccion . "<br>" .
            "<b>Año</b>: " . $anio . "<br>" .
            "<b>Nacionalidad</b>: " . $nacionalidad . "<br>" .
            "<b>Género</b>: " . $genero . "<br>" .
            "<b>Duración</b>: " . $duracion . "<br>" .
            "<b>Restricciones de edad</b>: " . $edades . "<br>" .
            "<b>Sinopsis</b>: " . $sinopsis . "<br>";
        return $res;
    }

    
}
