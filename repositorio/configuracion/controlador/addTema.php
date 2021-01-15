<?php

require_once('../Modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Tema = $_POST['tema'];
    $Descripcion = $_POST['descripcion'];

    $ModeloConfiguracion->addTema($Tema, $Descripcion);

}else{
    header('Location: ../../index.php');
}