<?php

require_once('../Modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Categoria = $_POST['Id'];
    $Tema = $_POST['tema'];

    $ModeloConfiguracion->addTemaACategoria($Categoria, $Tema);

}else{
    header('Location: ../../index.php');
}