<?php

require_once('../Modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Programa = $_POST['programa'];

    $ModeloConfiguracion->addPrograma($Programa);

}else{
    header('Location: ../../index.php');
}