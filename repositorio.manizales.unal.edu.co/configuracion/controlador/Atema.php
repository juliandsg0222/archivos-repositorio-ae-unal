<?php

require_once('../modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Tema = $_POST['Id'];
    $Indicador = $_POST['indicador'];
    $Ruta = "?transaction=" . $Tema;

    $ModeloConfiguracion->addIndicadorATema($Tema, $Indicador, $Ruta);

}else{
    header('Location: ../../index.php');
}