<?php


class archivo{

    public function armarchivo($datos){
        $nombre = $datos["nombre"];
        $descripcion = $datos["descripcion"];
        $usuario = $datos["usuario"];
        $tipo = $datos["tipo"];
        $clave=$datos["clave"];
        $res =
            "<b>Nombre</b>: " . $nombre . "<br>" .
            "<b>Descripción</b>: " . $descripcion . "<br>" .
            "<b>Usuario</b>: " . $usuario . "<br>" .
            "<b>Tipo de archivo</b>: " . $tipo . "<br>" .
            "<b>Clave</b>: " . $clave . "<br>" ;
        return $res;
    }

    public function compartirarchivo($datos){
        $nombre = $datos["nombre"];
        $cantDias = $datos["dias"];
        $descargas = $datos["descargas"];
        $usuario = $datos["usuario"];
        $clave = $datos["clave"];
        $enlace = $datos["enlace"];
        if($cantDias==0 || $cantDias=="null"){
            $cantDias="No expira";
        }
        if($descargas=="null"){
            $descargas="Sin limite";
        }
        if($clave!="null"){
            $protegerPass= "Si, con clave \"".$clave."\" ";
        }else{
            $protegerPass="No";
        }
        $res =
            "<b>Nombre</b>: " . $nombre . "<br>" .
            "<b>Cantidad de días compartido</b>: " . $cantDias . "<br>" .
            "<b>Cantidad de descargas</b>: " . $descargas . "<br>" .
            "<b>Usuario</b>: " . $usuario . "<br>" .
            "<b>Protegido con clave</b>: " . $protegerPass . "<br>".
            "<b>Link de compartir</b>: " . $enlace . "<br>" ;
        return $res;
    }

    public function eliminararchivocompartido($datos){
        $nombre = $datos["nombre"];
        $cantVeces = $datos["cantveces"];
        $motivo = $datos["motivo"];
        $usuario = $datos["usuario"];
        $res =
            "<b>Nombre</b>: " . $nombre . "<br>" .
            "<b>Cantidad de veces compartido</b>: " . $cantVeces . "<br>" .
            "<b>Motivo de dejar de compartir</b>: " . $motivo . "<br>" .
            "<b>Usuario</b>: " . $usuario . "<br>" ;
        return $res;
    }

    public function eliminararchivo($datos){
        $nombre = $datos["nombre"];
        $motivo = $datos["motivo"];
        $usuario = $datos["usuario"];
        $res =
            "<b>Nombre</b>: " . $nombre . "<br>" .
            "<b>Motivo de eliminación</b>: " . $motivo . "<br>" .
            "<b>Usuario</b>: " . $usuario . "<br>" ;
        return $res;
    }
}

?>
