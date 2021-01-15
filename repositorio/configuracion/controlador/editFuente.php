<?php

require_once('../Modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Id = $_POST['Id'];
    $Fuente = $_POST['fuente'];

    $ModeloConfiguracion->updateFuente($Id, $Fuente);

}else{
    header('Location: ../../index.php');
}

?>