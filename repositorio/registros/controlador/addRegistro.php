<?php

require_once('../Modelo/registros.php');

if($_POST){
    $ModeloRegistros = new Registros();

    $Nombre = $_POST['nombre'];
    $Descripcion = $_POST['descripcion'];
    $Acceso = $_POST['acceso'];
    $Indicador = $_POST['indicador'];
    $Fuente = $_POST['fuente'];
    $Ruta = "?transaction=" . $_POST['IdTemas'];
    $ModeloRegistros->addRegistro($Nombre, $Descripcion, $Acceso, $Indicador, $Fuente, $Ruta);
}else{
    header('Location: ../../index.php');
}