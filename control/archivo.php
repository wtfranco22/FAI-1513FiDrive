<?php


class archivo
{

    public function armarchivo($datos)
    {
        $nombre = $datos["nombre"];
        $descripcion = $datos["descripcion"];
        $usuario = $datos["usuario"];
        $tipo = $datos["tipo"];
        $clave = $datos["clave"];
        $res =
            "<b>Nombre</b>: " . $nombre . "<br>" .
            "<b>Descripción</b>: " . $descripcion . "<br>" .
            "<b>Usuario</b>: " . $usuario . "<br>" .
            "<b>Tipo de archivo</b>: " . $tipo . "<br>" .
            "<b>Clave</b>: " . $clave . "<br>";
        return $res;
    }

    public function compartirarchivo($datos)
    {
        $nombre = $datos["nombre"];
        $cantDias = $datos["dias"];
        $descargas = $datos["descargas"];
        $usuario = $datos["usuario"];
        $clave = $datos["clave"];
        $enlace = $datos["enlace"];
        if ($cantDias == 0 || $cantDias == "null") {
            $cantDias = "No expira";
        }
        if ($descargas == "null") {
            $descargas = "Sin limite";
        }
        if ($clave != "null") {
            $protegerPass = "Si, con clave \"" . $clave . "\" ";
        } else {
            $protegerPass = "No";
        }
        $res =
            "<b>Nombre</b>: " . $nombre . "<br>" .
            "<b>Cantidad de días compartido</b>: " . $cantDias . "<br>" .
            "<b>Cantidad de descargas</b>: " . $descargas . "<br>" .
            "<b>Usuario</b>: " . $usuario . "<br>" .
            "<b>Protegido con clave</b>: " . $protegerPass . "<br>" .
            "<b>Link de compartir</b>: " . $enlace . "<br>";
        return $res;
    }

    public function eliminararchivocompartido($datos)
    {
        $nombre = $datos["nombre"];
        $cantVeces = $datos["cantveces"];
        $motivo = $datos["motivo"];
        $usuario = $datos["usuario"];
        $res =
            "<b>Nombre</b>: " . $nombre . "<br>" .
            "<b>Cantidad de veces compartido</b>: " . $cantVeces . "<br>" .
            "<b>Motivo de dejar de compartir</b>: " . $motivo . "<br>" .
            "<b>Usuario</b>: " . $usuario . "<br>";
        return $res;
    }

    public function eliminararchivo($datos)
    {
        $nombre = $datos["nombre"];
        $motivo = $datos["motivo"];
        $usuario = $datos["usuario"];
        $res =
            "<b>Nombre</b>: " . $nombre . "<br>" .
            "<b>Motivo de eliminación</b>: " . $motivo . "<br>" .
            "<b>Usuario</b>: " . $usuario . "<br>";
        return $res;
    }

    public function subirarchivo($datos)
    {
        $error = "";
        $dir = '\\XAMPP\htdocs\FAI-1513\archivos\\';
        if ($_FILES['archivo']['error'] <= 0) {
            $tipo = $_FILES['archivo']['type'];

            if ($tipo == "application/pdf" || $tipo == "application/msword") {
                $tam = $_FILES['archivo']['size'];

                if ($tam < 2097153) {
                    $temp = $_FILES['archivo']['tmp_name'];
                    if (copy($temp, $dir . $_FILES['archivo']['name'])) {
                        $nombre = $_FILES['archivo']['name'];
                        $res = "<b>Nombre</b>: " . $nombre . "<br>" .
                            "<b>Tipo</b>: " . $tipo . "<br>" .
                            "<b>Tamaño</b>: " . $tam . "MB<br>" .
                            "<b>Carpeta temporal</b>: " . $temp . "<br>" .
                            "Se ha copiado con exito en " . $dir . $nombre;
                    } else {

                        $error = "ERROR: no se pudo copiar el archivo<br>";
                    }
                } else {

                    $error = "El archivo es demasiado grande<br>";
                }
            } else {

                $error = "El archivo no es .pdf o .doc <br>";
            }
        } else {

            $error = "ERROR: no se puedo cargar<br>";
        }
        if ($error != "") {
            $res = $error;
        }
        return $res;
    }

    public function leerarchivo()
    {
        $dir = '\\XAMPP\htdocs\FAI-1513\archivos\\';
        $res["contenido"] = "Sin Leer archivo";
        if ($_FILES['archivo']['error'] <= 0) {
            $tipo = $_FILES['archivo']['type'];

            if ($tipo == "text/plain") {
                $temp = $_FILES['archivo']['tmp_name'];

                if (copy($temp, $dir . $_FILES['archivo']['name'])) {
                    $nombre = $_FILES['archivo']['name'];
                    $tam = $_FILES['archivo']['size'];
                    $res["detalles"] = "Nombre: " . $nombre . "<br>" .
                        "Tipo: " . $tipo . "<br>" .
                        "Tamaño: " . $tam . "<br>" .
                        "Carpeta temporal: " . $temp . "<br>" .
                        "Se ha copiado con exito en " . $dir . $nombre . "<br>";
                    $res["contenido"] = "\nContenido:\n\n" . file_get_contents($dir . $nombre);
                } else {

                    $res["detalles"] = "ERROR: no se pudo copiar el archivo";
                }
            } else {

                $res["detalles"] = "El archivo no es un .txt <br>";
            }
        } else {
            $res["detalles"] = "ERROR: no se puedo cargar, no se pudo acceder al archivo temporal";
        }
        return $res;
    }

    public function cargarPelicula($datos)
    {
        $error = "";
        $dir = '\\XAMPP\htdocs\FAI-1513\archivos\\';
        if ($_FILES['archivo']['error'] <= 0) {
            $tipo = $_FILES['archivo']['type'];

            if ($tipo == "image/gif" || $tipo == "image/jpeg" || $tipo == "image/png") {
                $tam = $_FILES['archivo']['size'];

                if ($tam < 10485761) {
                    $temp=$_FILES['archivo']['tmp_name'];

                    if (copy($temp, $dir . $_FILES['archivo']['name'])) {
                        $nombre=$_FILES['archivo']['name'];
                        $res = "<b>Nombre</b>: " . $nombre . "<br>" .
                            "<b>Tipo</b>: " . $tipo . "<br>" .
                            "<b>Tamaño</b>: " . $tam . "<br>" .
                            "<b>Carpeta temporal</b>: " . $temp . "<br>" .
                            "<b>Se ha copiado con exito en</b> " . $dir . $nombre."<br><br>";
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
                        $res .=
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
                            "<b>Sinopsis</b>: " . $sinopsis . "<br><br>".
                            "<img src = /FAI-1513/archivos/"   . $nombre . " class=\"w-50\">";
                    } else {
                        $error = "ERROR: No se pudo copiar el archivo en " . $dir;
                    }
                } else {
                    $error = "ERROR: El archivo es demasiado grande";
                }
            } else {
                $error = "ERROR: El archivo no es una imagen<br>";
            }
        } else {
            $error .= "ERROR: no se puedo cargar, no se pudo acceder al archivo temporal";
        }
        if($error!=""){
            $res.="<br><br>IMAGEN: ".$error;
        }
        return $res;
    }
}
