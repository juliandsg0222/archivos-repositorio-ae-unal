<?php

require_once('../../conexion.php');

class Temas extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }
 
    // Inicio métodos "Temas"
    public function getTemas($IdCategoria){
        $rows = null;
        $statement = $this->db->prepare("SELECT p.idCat, p.nomCat, p.idTem, p.nomTem, p.desTem FROM (SELECT cat_tema.idCat, nomCat, nomTem, tema.idTem, desTem FROM cat_tema LEFT JOIN categoria ON cat_tema.idCat = categoria.idCat LEFT JOIN tema ON cat_tema.idTem = tema.idTem) p WHERE p.idCat = :IdCategoria ORDER BY nomTem ASC");
        $statement->bindParam(':IdCategoria', $IdCategoria);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Temas"
}

?>