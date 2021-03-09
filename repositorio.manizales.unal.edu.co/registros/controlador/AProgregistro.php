<?php

require_once('../modelo/registros.php');

if($_POST){
    $ModeloRegistros = new Registros();

    $Registro = $_POST['IdReg'];
    $Programa = $_POST['programas'];
    $Ruta = "?transaction=" . $Registro . "&tema=" . $_POST['IdTemas'];

    $ModeloRegistros->addProgramaARegistro($Registro, $Programa, $Ruta);

}else{
    header('Location: ../../index.php');
}