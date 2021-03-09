<?php

require_once('../modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Usuario = $_POST['username'];
    $Nombre = $_POST['nombre'];
    $Contrasena = '123456789';
    $Rol = $_POST['rol'];

    $ModeloConfiguracion->addUsuario($Usuario, $Nombre, $Contrasena, $Rol);

}else{
    header('Location: ../../index.php');
}