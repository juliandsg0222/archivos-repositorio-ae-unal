<?php

require_once('../../conexion.php');

class Configuracion extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }

    // Inicio métodos "Usuarios"
    public function getUsuarios(){
        $rows = null;
        $statement = $this->db->prepare("SELECT idUsu, nomUsu, nomRol FROM usuario LEFT JOIN rol ON usuario.rolUsu = rol.idRol ORDER BY idUsu");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Usuarios"

    // Inicio métodos "Períodos"
    public function getPeriodos(){
        $rows = null;
        $statement = $this->db->prepare("SELECT nomPer FROM periodo ORDER BY nomPer DESC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Períodos"

    // Inicio métodos "Programas"
    public function getProgramas(){
        $rows = null;
        $statement = $this->db->prepare("SELECT nomProg FROM programa ORDER BY nomProg ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Programas"

    // Inicio métodos "Categorías"
    public function getCategorias(){
        $rows = null;
        $statement = $this->db->prepare("SELECT nomCat, desCat FROM categoria ORDER BY nomCat ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Categorías"

    // Inicio métodos "Temas"
    public function getTemas(){
        $rows = null;
        $statement = $this->db->prepare("SELECT nomTem, desTem FROM tema ORDER BY nomTem ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Temas"

    // Inicio métodos "Indicadores"
    public function getIndicadores(){
        $rows = null;
        $statement = $this->db->prepare("SELECT idInd, nomInd FROM indicador ORDER BY idInd ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Indicadores"

    // Inicio métodos "Fuentes"
    public function getFuentes(){
        $rows = null;
        $statement = $this->db->prepare("SELECT nomFue FROM fuente ORDER BY nomFue ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Fuentes"
    


    



}

?>