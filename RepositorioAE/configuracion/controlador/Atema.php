<?php

require_once('../modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Tema = $_POST['Id'];
    $Indicador = $_POST['indicador'];

    $ModeloConfiguracion->addIndicadorATema($Tema, $Indicador);

}else{
    header('Location: ../../index.php');
}