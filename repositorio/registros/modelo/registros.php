<?php

require_once('../../conexion.php');

class Registros extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }

    // Inicio métodos "Registros"
    public function getRegistros(){
        $rows = null;
        $statement = $this->db->prepare("SELECT idReg, nomReg, desReg, linkReg, idInd, nomFue FROM registro LEFT JOIN fuente ON registro.idFue = fuente.idFue");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function addUsuario($Usuario, $Nombre, $Contrasena, $Rol){
        $statement = $this->db->prepare("INSERT INTO usuario (idUsu, nomUsu, passUsu, rolUsu) VALUE (:Usuario, :Nombre, :Contrasena, :Rol)");
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Contrasena', $Contrasena);
        $statement->bindParam(':Rol', $Rol);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Cusuario.php');
        }
    }

    public function updateUsuario($Usuario, $Nombre, $Contrasena, $Rol){
        $statement = $this->db->prepare("UPDATE usuario SET nomUsu = :Nombre, passUsu = :Contrasena, rolUsu = :Rol WHERE idUsu = :Usuario");
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Contrasena', $Contrasena);
        $statement->bindParam(':Rol', $Rol);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Uusuario.php');
        }
    }

    public function deleteUsuario($Id){
        $statement = $this->db->prepare("DELETE FROM usuario WHERE idUsu = :Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Dusuario.php');
        }
    }

    public function getByIdUsuario($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuario WHERE idUsu = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getRoles(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM rol");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Registros"

}

?>