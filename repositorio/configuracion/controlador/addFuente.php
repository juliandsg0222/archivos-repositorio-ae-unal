<?php

require_once('../Modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Fuente = $_POST['fuente'];

    $ModeloConfiguracion->addFuente($Fuente);

}else{
    header('Location: ../../index.php');
}