<?php

require_once('../Modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Id = $_POST['Id'];
    $Indicador = $_POST['indicador'];
    $Descripcion = $_POST['descripcion'];

    $ModeloConfiguracion->updateIndicador($Id, $Indicador, $Descripcion);

}else{
    header('Location: ../../index.php');
}

?>