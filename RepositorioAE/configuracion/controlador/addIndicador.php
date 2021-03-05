<?php

require_once('../modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Indicador = $_POST['indicador'];
    $Descripcion = $_POST['descripcion'];

    $ModeloConfiguracion->addIndicador($Indicador, $Descripcion);

}else{
    header('Location: ../../index.php');
}