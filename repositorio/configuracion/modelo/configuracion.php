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

}

?>