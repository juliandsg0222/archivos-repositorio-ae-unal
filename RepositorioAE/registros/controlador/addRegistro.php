<?php

require_once('../modelo/registros.php');

if($_POST){
    $ModeloRegistros = new Registros();

    $Fecha = $_POST['fecha'];
    $Nombre = $_POST['nombre'];
    $Descripcion = $_POST['descripcion'];
    $Acceso = $_POST['acceso'];
    $Indicador = $_POST['indicador'];
    $Fuente = $_POST['fuente'];
    $Ruta = "?transaction=" . $_POST['IdTemas'];
    $ModeloRegistros->addRegistro($Fecha, $Nombre,$Descripcion, $Acceso, $Indicador, $Fuente, $Ruta);
}else{
    header('Location: ../../index.php');
}