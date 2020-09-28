<?php

class usuario
{
    public function validarUsuario($datos)
    {
        $res = "";
        $user = $datos["usuario"];
        $contra = $datos["clave"];
        $usuarios = [];
        $usuarios[] = ["usuario" => "franco", "clave" => "contra1234"];
        $usuarios[] = ["usuario" => "sabrina", "clave" => "corona2020"];
        $usuarios[] = ["usuario" => "angel", "clave" => "angel123"];
        $encontrado = false;
        $i = 0;
        while ($i < 3 && !$encontrado) {
            if ($user == $usuarios[$i]["usuario"]) {
                if ($contra == $usuarios[$i]["clave"]) {
                    $res = "Bienvenid@!";
                } else {
                    $res = "No ingresaste bien tu contraseña";
                }
                $encontrado = true;
            } else {
                $res = "No existe el usuario";
            }
            $i++;
        }
        return $res;
    }
}
?>
