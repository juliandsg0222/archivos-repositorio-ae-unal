<?php

require_once('../modelo/usuarios.php');

if($_POST){
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Contrasena'];

    $Modelo = new Usuarios();
    $Modelo->login($Usuario, $Password);
} else{
    header('Location: ../../index.php');
}
