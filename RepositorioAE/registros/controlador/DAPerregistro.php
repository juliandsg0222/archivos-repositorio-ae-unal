<?php

require_once('../modelo/registros.php');

    $ModeloRegistros = new Registros();

    $Registro = $_GET['registro'];
    $Periodo = $_GET['periodo'];
    $Tema = $_GET['tema'];
    $Ruta = "?transaction=" . $Registro . "&tema=" . $Tema;

    $ModeloRegistros->deletePeriodoARegistro($Registro, $Periodo, $Ruta);