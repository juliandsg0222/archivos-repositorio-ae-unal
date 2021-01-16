<?php

require_once('../../conexion.php');

class Categorias extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }
 
    // Inicio métodos "Categorías"
    public function getCategorias(){
        $rows = null;
        $statement = $this->db->prepare("SELECT idCat, nomCat FROM categoria ORDER BY nomCat ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Categorías"
    

    // Inicio métodos "Relaciones"
    public function getRelaciones(){
        $rows = null;
        $statement = $this->db->prepare("SELECT f.nomCat, f.nomTem, numInd FROM (SELECT p.nomCat, p.nomTem, idInd FROM (SELECT nomCat, nomTem, tema.idTem FROM cat_tema LEFT JOIN categoria ON cat_tema.idCat = categoria.idCat LEFT JOIN tema ON cat_tema.idTem = tema.idTem) p LEFT JOIN tema_ind ON p.idTem = tema_ind.idTem) f LEFT JOIN indicador ON f.idInd = indicador.idInd ORDER BY f.nomCat DESC, f.nomTem ASC, numInd ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Relaciones"

}

?>