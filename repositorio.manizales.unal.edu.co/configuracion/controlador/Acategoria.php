<?php

require_once('../modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Categoria = $_POST['Id'];
    $Tema = $_POST['tema'];
    $Ruta = "?transaction=" . $Categoria;

    $ModeloConfiguracion->addTemaACategoria($Categoria, $Tema, $Ruta);

}else{
    header('Location: ../../index.php');
}