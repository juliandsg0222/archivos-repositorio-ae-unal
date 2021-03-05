<?php

require_once('../modelo/registros.php');

if($_POST){
    $ModeloRegistros = new Registros();
    $IdTemas = $_POST['IdTemas'];
    $Id = $_POST['Id'];
    
    $Ruta = '?transaction=' . $IdTemas;
    $Ruta2 =  "?transaction=" . $Id .'&tema=' . $IdTemas;

    $ModeloRegistros->deleteRegistro($Id, $Ruta, $Ruta2);
}else{
    header('Location: ../../index.php');
}