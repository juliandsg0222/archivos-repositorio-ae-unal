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
        $mensajeAdicionado = "INTENTO DE VIOLACIÓN DE INTEGRIDAD REFERENCIAL: El elemento '--Seleccione--' no puede asociarse";
        try{
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
        }catch(Exception $e){
            header('Location: ../../404/index.php?exception=' . substr($e->getMessage(), 0, 53) . '&mensaje=' . $mensajeAdicionado);
        }
    }

    public function updateRegistro($Id, $Nombre, $Descripcion, $Link, $Indicador, $Fuente, $Ruta, $Ruta2){
        $mensajeAdicionado = "INTENTO DE VIOLACIÓN DE INTEGRIDAD REFERENCIAL: El elemento '--Seleccione--' no puede asociarse";
        try{
            $statement = $this->db->prepare("UPDATE registro SET nomReg = :Nombre, desReg = :Descripcion, linkReg = :Link, idInd = :Indicador, idFue = :Fuente WHERE idReg = :Id");
            $statement->bindParam(':Nombre', $Nombre);
            $statement->bindParam(':Descripcion', $Descripcion);
            $statement->bindParam(':Link', $Link);
            $statement->bindParam(':Indicador', $Indicador);
            $statement->bindParam(':Fuente', $Fuente);
            $statement->bindParam(':Id', $Id);
            
            if($statement->execute()){
                header('Location: ../vista/index.php' . $Ruta);
            } else{
                header('Location: ../vista/Uregistro.php' . $Ruta2);
            }
        }catch(Exception $e){
            header('Location: ../../404/index.php?exception=' . substr($e->getMessage(), 0, 53) . '&mensaje=' . $mensajeAdicionado);
        }
    }

    public function deleteRegistro($Id){
        $mensajeEliminado = "INTENTO DE VIOLACIÓN DE INTEGRIDAD REFERENCIAL: El elemento aún no puede ser eliminado, parece que otros registros dependen de este";
        try{
            $statement = $this->db->prepare("DELETE FROM registro WHERE idReg = :Id");
            $statement->bindParam(':Id', $Id);
            if($statement->execute()){
                header('Location: ../vista/index.php');
            } else{
                header('Location: ../vista/Dregistro.php');
            }
        }catch(Exception $e){
            header('Location: ../../404/index.php?exception=' . substr($e->getMessage(), 0, 53) . '&mensaje=' . $mensajeEliminado);
        }

    }

    public function getByIdRegistro($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM registro WHERE idReg = :Id");
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

    public function getProgramas($idReg){
        $rows = null;
        $statement = $this->db->prepare("SELECT reg_prog.idProg, nomProg FROM reg_prog LEFT JOIN programa ON programa.idProg = reg_prog.idProg WHERE idReg = :idReg ORDER BY nomProg ASC");
        $statement->bindParam(':idReg', $idReg);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getPeriodos($idReg){
        $rows = null;
        $statement = $this->db->prepare("SELECT reg_per.idPer, nomPer FROM reg_per LEFT JOIN periodo ON periodo.idPer = reg_per.idPer WHERE idReg = :idReg ORDER BY nomPer ASC");
        $statement->bindParam(':idReg', $idReg);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    // Fin métodos "Registros"

}

?>