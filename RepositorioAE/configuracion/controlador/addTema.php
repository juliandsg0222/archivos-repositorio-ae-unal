<?php

require_once('../modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Tema = $_POST['tema'];
    $Descripcion = $_POST['descripcion'];

    $ModeloConfiguracion->addTema($Tema, $Descripcion);

}else{
    header('Location: ../../index.php');
}