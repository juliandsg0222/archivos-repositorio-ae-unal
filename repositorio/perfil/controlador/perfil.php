<?php

require_once('../modelo/perfil.php');

if($_POST){
    $ModeloPerfil = new Perfil();

    $Id = $_POST['Id'];
    $Contrasena = $_POST['contrasena'];

    $ModeloPerfil->updatePerfil($Id, $Contrasena);

}else{
    header('Location: ../../index.php');
}

?>