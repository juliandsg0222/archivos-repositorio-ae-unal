<?php

require_once('../Modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Id = $_POST['Id'];
    $Tema = $_POST['tema'];
    $Descripcion = $_POST['descripcion'];

    $ModeloConfiguracion->updateTema($Id, $Tema, $Descripcion);

}else{
    header('Location: ../../index.php');
}

?>