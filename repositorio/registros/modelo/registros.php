<?php

require_once('../../conexion.php');

class Registros extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }

    // Inicio métodos "Registros"
    public function getRegistros($IdTema){
        $rows = null;
        $statement = $this->db->prepare("SELECT idReg, nomReg, desReg, linkReg, registro.idInd, numInd, nomFue FROM registro LEFT JOIN fuente ON registro.idFue = fuente.idFue LEFT JOIN indicador ON indicador.idInd = registro.idInd WHERE registro.idInd IN (SELECT tema_ind.idInd FROM tema LEFT JOIN tema_ind ON tema.idTem = tema_ind.idTem LEFT JOIN indicador ON tema_ind.idInd = indicador.idInd WHERE tema_ind.idTem = :IdTema)");
        $statement->bindParam(':IdTema', $IdTema);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getIndicadoresDeRegistro($IdTemas){
        $rows = null;
        $statement = $this->db->prepare("SELECT tema_ind.idTem, nomTem, tema_ind.idInd, numInd, nomInd FROM tema LEFT JOIN tema_ind ON tema.idTem = tema_ind.idTem LEFT JOIN indicador ON tema_ind.idInd = indicador.idInd WHERE tema_ind.idTem = :IdTemas ORDER BY numInd ASC");
        $statement->bindParam(':IdTemas', $IdTemas);
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

    public function updateRegistro($Id, $Nombre, $Descripcion, $Link, $Indicador, $Fuente){
        $statement = $this->db->prepare("UPDATE registro SET nomReg = :Nombre, desReg = :Descripcion, linkReg = :Link, idInd = :Indicador, idFue = :Fuente WHERE idReg = :Id");
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Descripcion', $Descripcion);
        $statement->bindParam(':Link', $Link);
        $statement->bindParam(':Indicador', $Indicador);
        $statement->bindParam(':Fuente', $Fuente);
        $statement->bindParam(':Id', $Id);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Uregistro.php');
        }
    }

    public function deleteRegistro($Id){
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