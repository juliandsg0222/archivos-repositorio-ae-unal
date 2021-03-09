<?php

require_once('../modelo/registros.php');

    $ModeloRegistros = new Registros();

    $Registro = $_GET['registro'];
    $Programa = $_GET['programa'];
    $Tema = $_GET['tema'];
    $Ruta = "?transaction=" . $Registro . "&tema=" . $Tema;

    $ModeloRegistros->deleteProgramaARegistro($Registro, $Programa, $Ruta);