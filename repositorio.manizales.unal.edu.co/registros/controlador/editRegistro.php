<?php

require_once('../modelo/registros.php');

if($_POST){
    $ModeloRegistros = new Registros();
    $IdTemas = $_POST['IdTemas'];

    $Id = $_POST['Id'];
    $Fecha = $_POST['fecha'];
    $Nombre = $_POST['nombre'];
    $Descripcion = $_POST['descripcion'];
    $Acceso = $_POST['acceso'];
    $Indicador = $_POST['indicador'];
    $Fuente = $_POST['fuente'];
    $Ruta = '?transaction=' . $IdTemas;
    $Ruta2 =  "?transaction=" . $Id .'&tema=' . $IdTemas;
    $ModeloRegistros->updateRegistro($Id, $Fecha, $Nombre, $Descripcion, $Acceso, $Indicador, $Fuente, $Ruta, $Ruta2);

}else{
    header('Location: ../../index.php');
}