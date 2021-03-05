<?php

require_once('../modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Id = $_POST['Id'];
    $Categoria = $_POST['categoria'];
    $Descripcion = $_POST['descripcion'];

    $ModeloConfiguracion->updateCategoria($Id, $Categoria, $Descripcion);

}else{
    header('Location: ../../index.php');
}

?>