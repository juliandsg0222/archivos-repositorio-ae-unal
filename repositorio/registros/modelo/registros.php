<?php

require_once('../../conexion.php');

class Registros extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }

    // Inicio métodos "Registros"
    public function getRegistros(){
        $rows = null;
        $statement = $this->db->prepare("SELECT idReg, nomReg, desReg, linkReg, numInd, nomFue FROM registro LEFT JOIN fuente ON registro.idFue = fuente.idFue LEFT JOIN indicador ON indicador.idInd = registro.idInd");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function addRegistro($Nombre, $Descripcion, $Link, $Indicador, $Fuente){
        $statement = $this->db->prepare("INSERT INTO registro (nomReg, desReg, linkReg, idInd, idFue) VALUE (:Nombre, :Descripcion, :Link, :Indicador, :Fuente)");
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Descripcion', $Descripcion);
        $statement->bindParam(':Link', $Link);
        $statement->bindParam(':Indicador', $Indicador);
        $statement->bindParam(':Fuente', $Fuente);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Cregistro.php');
        }
    }

    public function updateRegistro($Usuario, $Nombre, $Contrasena, $Rol){
        $statement = $this->db->prepare("UPDATE registro SET nomReg = :Nombre, desReg = :Descripcion, linkReg = :Link, idInd = :Indicador, idFue = :Fuente WHERE idUsu = :Usuario");
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