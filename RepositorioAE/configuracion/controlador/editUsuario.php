<?php

require_once('../modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Id = $_POST['Id'];
    $Nombre = $_POST['nombre'];
    $Contrasena = $_POST['contrasena'];
    $Rol = $_POST['rol'];

    $ModeloConfiguracion->updateUsuario($Id, $Nombre, $Contrasena, $Rol);

}else{
    header('Location: ../../index.php');
}

?>