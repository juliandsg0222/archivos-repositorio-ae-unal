<?php

require_once('../Modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Id = $_POST['Id'];
    $Programa = $_POST['programa'];

    $ModeloConfiguracion->updatePrograma($Id, $Programa);

}else{
    header('Location: ../../index.php');
}

?>