<?php

require_once('../../conexion.php');

class Categorias extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }
 
    // Inicio métodos "Categorías"
    public function getCategorias(){
        $rows = null;
        $statement = $this->db->prepare("SELECT DISTINCT cat_tema.idCat, nomCat, desCat FROM cat_tema LEFT JOIN categoria ON cat_tema.idCat = categoria.idCat");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Fin métodos "Categorías"
}

?>