<?php

require_once('../modelo/registros.php');

if($_POST){
    $ModeloRegistros = new Registros();

    $Registro = $_POST['IdReg'];
    $Periodo = $_POST['periodos'];
    $Ruta = "?transaction=" . $Registro . "&tema=" . $_POST['IdTemas'];

    $ModeloRegistros->addPeriodoARegistro($Registro, $Periodo, $Ruta);

}else{
    header('Location: ../../index.php');
}