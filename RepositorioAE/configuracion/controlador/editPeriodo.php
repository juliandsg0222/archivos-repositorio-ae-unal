<?php

require_once('../modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Id = $_POST['Id'];
    $Periodo = $_POST['periodo'];

    $ModeloConfiguracion->updatePeriodo($Id, $Periodo);

}else{
    header('Location: ../../index.php');
}

?>