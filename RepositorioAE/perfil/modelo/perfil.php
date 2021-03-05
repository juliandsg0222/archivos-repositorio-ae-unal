<?php

require_once('../../conexion.php');

class Perfil extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }

    public function updatePerfil($Id, $Contrasena){
        $Contrasena = password_hash($Contrasena, PASSWORD_DEFAULT, ['cost' => 10]);
        $statement = $this->db->prepare("UPDATE usuario SET passUsu = :Contrasena WHERE idUsu = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Contrasena', $Contrasena);
        
        if($statement->execute()){
            header('Location: ../../rol-editar/vista/index.php');
        } else{
            header('Location: ../vista/index.php');
        }
    }
}

?>