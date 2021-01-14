<?php

require_once('../Modelo/configuracion.php');

if($_POST){
    $ModeloConfiguracion = new Configuracion();

    $Usuario = $_POST['username'];
    $Nombre = $_POST['nombre'];
    $Contrasena = $_POST['contrasena'];
    $Rol = $_POST['rol'];

    $ModeloConfiguracion->addUsuario($Usuario, $Nombre, $Contrasena, $Rol);

}else{
    header('Location: ../../index.php');
}