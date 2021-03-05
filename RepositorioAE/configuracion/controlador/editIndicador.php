<?php

require_once('../modelo/configuracion.php');

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