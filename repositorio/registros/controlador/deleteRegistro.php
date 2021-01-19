<?php

require_once('../Modelo/registros.php');

if($_POST){
    $ModeloRegistros = new Registros();
    $IdTemas = $_POST['IdTemas'];
    $Id = $_POST['Id'];

    $ModeloRegistros->deleteRegistro($Id);
}else{
    header('Location: ../../index.php');
}