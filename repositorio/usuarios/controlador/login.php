<?php

require_once('../modelo/usuarios.php');

if($_POST){
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Contrasena'];

    $Modelo = new Usuarios();
    if($Modelo->login($Usuario, $Password)){
        header('Location: ../../rol-editar/vista/index.php');
    } else{
        header('Location: ../../index.php');
    }
} else{
    header('Location: ../../index.php');
}

?>