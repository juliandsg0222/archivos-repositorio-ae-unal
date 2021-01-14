<?php

require_once('../Modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Periodo = $_POST['periodo'];

    $ModeloConfiguracion->addPeriodo($Periodo);

}else{
    header('Location: ../../index.php');
}