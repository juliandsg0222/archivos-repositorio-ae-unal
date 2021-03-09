<?php

require_once('../modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Categoria = $_POST['categoria'];
    $Descripcion = $_POST['descripcion'];

    $ModeloConfiguracion->addCategoria($Categoria, $Descripcion);

}else{
    header('Location: ../../index.php');
}