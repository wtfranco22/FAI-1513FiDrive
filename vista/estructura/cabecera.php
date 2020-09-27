<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practico_1_y_2</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <!--<link rel="stylesheet" type="text/css" href="../../css/form-validation.css">-->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrapValidator.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        /*Como son unas lineas de codigo, los deje para variar un poco los iconos*/
        .fa-smile{
            color: green;
        }
        .fa-angry{
            color: red;
        }
        </style>
</head>

<body>
    <nav class="navbar navbar-dark text-center sticky-top flex-md-nowrap bg-dark shadow">
        <h3 class="col-12 text-white">Esta es la cabecera</h3>
        <button class="navbar-toggler position-absolute d-md-none bg-info collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container-fluid bg-primary">
        <?php
        include_once("../../../configuracion.php");
        include_once("lateral.php");
        ?>