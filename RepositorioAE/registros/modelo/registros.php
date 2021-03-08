<?php

require_once('../../conexion.php');

class Registros extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }

    // Inicio métodos "Registros"
    public function getRegistros($IdTema){
        $rows = null;
        $statement = $this->db->prepare("SELECT idReg, fechaReg, nomReg, desReg, linkReg, registro.idInd, numInd, nomFue FROM registro LEFT JOIN fuente ON registro.idFue = fuente.idFue LEFT JOIN indicador ON indicador.idInd = registro.idInd WHERE registro.idInd IN (SELECT tema_ind.idInd FROM tema LEFT JOIN tema_ind ON tema.idTem = tema_ind.idTem LEFT JOIN indicador ON tema_ind.idInd = indicador.idInd WHERE tema_ind.idTem = :IdTema) ORDER BY fechaReg DESC, nomReg ASC");
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

    public function addRegistro($Fecha, $Nombre, $Descripcion, $Link, $Indicador, $Fuente, $Ruta){
        $mensajeAdicionado = "INTENTO DE VIOLACIÓN DE INTEGRIDAD REFERENCIAL: El elemento '--Seleccione--' no puede asociarse";
        try{
            $statement = $this->db->prepare("INSERT INTO registro (fechaReg, nomReg, desReg, linkReg, idInd, idFue) VALUE (:Fecha, :Nombre, :Descripcion, :Link, :Indicador, :Fuente)");
            $statement->bindParam(':Fecha', $Fecha);
            $statement->bindParam(':Nombre', $Nombre);
            $statement->bindParam(':Descripcion', $Descripcion);
            $statement->bindParam(':Link', $Link);
            $statement->bindParam(':Indicador', $Indicador);
            $statement->bindParam(':Fuente', $Fuente);
            
            if($statement->execute()){
                header('Location: ../vista/index.php' . $Ruta);
            } else{
                header('Location: ../vista/Cregistro.php');
            }
        }catch(Exception $e){
            header('Location: ../../404/index.php?exception=' . substr($e->getMessage(), 0, 53) . '&mensaje=' . $mensajeAdicionado);
        }
    }

    public function updateRegistro($Id, $Fecha, $Nombre, $Descripcion, $Link, $Indicador, $Fuente, $Ruta, $Ruta2){
        $mensajeAdicionado = "INTENTO DE VIOLACIÓN DE INTEGRIDAD REFERENCIAL: El elemento '--Seleccione--' no puede asociarse";
        try{
            $statement = $this->db->prepare("UPDATE registro SET fechaReg = :Fecha, nomReg = :Nombre, desReg = :Descripcion, linkReg = :Link, idInd = :Indicador, idFue = :Fuente WHERE idReg = :Id");
            $statement->bindParam(':Fecha', $Fecha);
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

    public function deleteRegistro($Id, $Ruta, $Ruta2){
        $mensajeEliminado = "INTENTO DE VIOLACIÓN DE INTEGRIDAD REFERENCIAL: El elemento aún no puede ser eliminado, parece que otros registros dependen de este";
        try{
            $statement = $this->db->prepare("DELETE FROM registro WHERE idReg = :Id");
            $statement->bindParam(':Id', $Id);
            if($statement->execute()){
                header('Location: ../vista/index.php' .$Ruta);
            } else{
                header('Location: ../vista/Dregistro.php' . $Ruta2);
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
        $statement = $this->db->prepare("SELECT reg_per.idPer, nomPer FROM reg_per LEFT JOIN periodo ON periodo.idPer = reg_per.idPer WHERE idReg = :idReg ORDER BY nomPer DESC");
        $statement->bindParam(':idReg', $idReg);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getProgramasDisponibles($idReg){
        $rows = null;
        $statement = $this->db->prepare("SELECT programa.* FROM programa WHERE programa.idProg NOT IN (SELECT idProg FROM reg_prog  WHERE idReg = :idReg) ORDER BY nomProg ASC");
        $statement->bindParam(':idReg', $idReg);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function addProgramaARegistro($Registro, $Programa, $Ruta){
        $mensajeAdicionado = "INTENTO DE VIOLACIÓN DE INTEGRIDAD REFERENCIAL: El elemento '--Seleccione--' no puede asociarse";
        try{
            $statement = $this->db->prepare("INSERT INTO reg_prog (idReg, idProg) VALUE (:Registro, :Programa)");
            $statement->bindParam(':Registro', $Registro);
            $statement->bindParam(':Programa', $Programa);
            
            if($statement->execute()){
                header('Location: ../vista/AProgregistro.php' . $Ruta);
            } else{
                header('Location: ../vista/AProgregistro.php' . $Ruta);
            }
        }catch(Exception $e){
            header('Location: ../../404/index.php?exception=' . substr($e->getMessage(), 0, 53) . '&mensaje=' . $mensajeAdicionado);
        }
    }

    public function deleteProgramaARegistro($Registro, $Programa, $Ruta){
        $mensajeEliminado = "INTENTO DE VIOLACIÓN DE INTEGRIDAD REFERENCIAL: El elemento aún no puede ser eliminado, parece que otros registros dependen de este";
        try{
            $statement = $this->db->prepare("DELETE FROM reg_prog WHERE idReg = :Registro AND idProg = :Programa");
            $statement->bindParam(':Registro', $Registro);
            $statement->bindParam(':Programa', $Programa);
            
            if($statement->execute()){
                header('Location: ../vista/AProgregistro.php' . $Ruta);
            } else{
                header('Location: ../vista/AProgregistro.php' . $Ruta);
            }
        }catch(Exception $e){
            header('Location: ../../404/index.php?exception=' . substr($e->getMessage(), 0, 53) . '&mensaje=' . $mensajeEliminado);
        }
    }

    public function getPeriodosDisponibles($idReg){
        $rows = null;
        $statement = $this->db->prepare("SELECT periodo.* FROM periodo WHERE periodo.idPer NOT IN (SELECT idPer FROM reg_per  WHERE idReg = :idReg) ORDER BY nomPer DESC");
        $statement->bindParam(':idReg', $idReg);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function addPeriodoARegistro($Registro, $Periodo, $Ruta){
        $mensajeAdicionado = "INTENTO DE VIOLACIÓN DE INTEGRIDAD REFERENCIAL: El elemento '--Seleccione--' no puede asociarse";
        try{
            $statement = $this->db->prepare("INSERT INTO reg_per (idReg, idPer) VALUE (:Registro, :Periodo)");
            $statement->bindParam(':Registro', $Registro);
            $statement->bindParam(':Periodo', $Periodo);
            
            if($statement->execute()){
                header('Location: ../vista/APerregistro.php' . $Ruta);
            } else{
                header('Location: ../vista/APerregistro.php' . $Ruta);
            }
        }catch(Exception $e){
            header('Location: ../../404/index.php?exception=' . substr($e->getMessage(), 0, 53) . '&mensaje=' . $mensajeAdicionado);
        }
    }

    public function deletePeriodoARegistro($Registro, $Periodo, $Ruta){
        $mensajeEliminado = "INTENTO DE VIOLACIÓN DE INTEGRIDAD REFERENCIAL: El elemento aún no puede ser eliminado, parece que otros registros dependen de este";
        try{
            $statement = $this->db->prepare("DELETE FROM reg_per WHERE idReg = :Registro AND idPer = :Periodo");
            $statement->bindParam(':Registro', $Registro);
            $statement->bindParam(':Periodo', $Periodo);
            
            if($statement->execute()){
                header('Location: ../vista/APerregistro.php' . $Ruta);
            } else{
                header('Location: ../vista/APerregistro.php' . $Ruta);
            }
        }catch(Exception $e){
            header('Location: ../../404/index.php?exception=' . substr($e->getMessage(), 0, 53) . '&mensaje=' . $mensajeEliminado);
        }
    }

    // Fin métodos "Registros"

}

?>