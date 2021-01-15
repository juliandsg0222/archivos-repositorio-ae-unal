<?php

require_once('../Modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();
    $Id = $_POST['Id'];
    $ModeloConfiguracion->deletePrograma($Id);

}else{
    header('Location: ../../index.php');
}

?>