<?php

require_once('../modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();
    $Id = $_POST['Id'];
    $ModeloConfiguracion->deletePrograma($Id);

}else{
    header('Location: ../../index.php');
}

?>