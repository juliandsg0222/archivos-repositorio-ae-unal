<?php

require_once('../../conexion.php');

class Configuracion extends Conexion{

    public function __construct(){
        $this->db = parent::__construct();
    }

    // Inicio métodos "Usuarios"
    public function getUsuarios(){
        $rows = null;
        $statement = $this->db->prepare("SELECT idUsu, usuUsu, nomUsu, nomRol FROM usuario LEFT JOIN rol ON usuario.rolUsu = rol.idRol ORDER BY usuUsu");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function addUsuario($Usuario, $Nombre, $Contrasena, $Rol){
        $statement = $this->db->prepare("INSERT INTO usuario (usuUsu, nomUsu, passUsu, rolUsu) VALUE (:Usuario, :Nombre, :Contrasena, :Rol)");
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
        $statement = $this->db->prepare("UPDATE usuario SET nomUsu = :Nombre, passUsu = :Contrasena, rolUsu = :Rol WHERE usuUsu = :Usuario");
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
    // Fin métodos "Usuarios"


    // Inicio métodos "Períodos"
    public function getPeriodos(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM periodo ORDER BY nomPer DESC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function addPeriodo($Periodo){
        $statement = $this->db->prepare("INSERT INTO periodo (nomPer) VALUE (:Periodo)");
        $statement->bindParam(':Periodo', $Periodo);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Cperiodo.php');
        }
    }

    public function updatePeriodo($Id, $Periodo){
        $statement = $this->db->prepare("UPDATE periodo SET nomPer = :Periodo WHERE idPer = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Periodo', $Periodo);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Uperiodo.php');
        }
    }

    public function getByIdPeriodo($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM periodo WHERE idPer = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function deletePeriodo($Id){
        $statement = $this->db->prepare("DELETE FROM periodo WHERE idPer = :Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Dperiodo.php');
        }
    }
    // Fin métodos "Períodos"


    // Inicio métodos "Programas"
    public function getProgramas(){
        $rows = null;
        $statement = $this->db->prepare("SELECT idProg, nomProg FROM programa ORDER BY nomProg ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function addPrograma($Programa){
        $statement = $this->db->prepare("INSERT INTO programa (nomProg) VALUE (:Programa)");
        $statement->bindParam(':Programa', $Programa);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Cprograma.php');
        }
    }

    public function updatePrograma($Id, $Programa){
        $statement = $this->db->prepare("UPDATE programa SET nomProg = :Programa WHERE idProg = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Programa', $Programa);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Uprograma.php');
        }
    }

    public function getByIdPrograma($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM programa WHERE idProg = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function deletePrograma($Id){
        $statement = $this->db->prepare("DELETE FROM programa WHERE idProg = :Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Dprograma.php');
        }
    }
    // Fin métodos "Programas"
    

    // Inicio métodos "Categorías"
    public function getCategorias(){
        $rows = null;
        $statement = $this->db->prepare("SELECT idCat, nomCat, desCat FROM categoria ORDER BY nomCat ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function addCategoria($Categoria, $Descripcion){
        $statement = $this->db->prepare("INSERT INTO categoria (nomCat, descat) VALUE (:Categoria, :Descripcion)");
        $statement->bindParam(':Categoria', $Categoria);
        $statement->bindParam(':Descripcion', $Descripcion);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Ccategoria.php');
        }
    }

    public function updateCategoria($Id, $Categoria, $Descripcion){
        $statement = $this->db->prepare("UPDATE categoria SET nomCat = :Categoria, desCat = :Descripcion WHERE idCat = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Categoria', $Categoria);
        $statement->bindParam(':Descripcion', $Descripcion);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Ucategoria.php');
        }
    }

    public function getByIdCategoria($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM categoria WHERE idCat = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function deleteCategoria($Id){
        $statement = $this->db->prepare("DELETE FROM categoria WHERE idCat = :Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Dcategoria.php');
        }
    }
    // Fin métodos "Categorías"
    

    // Inicio métodos "Temas"
    public function getTemas(){
        $rows = null;
        $statement = $this->db->prepare("SELECT idTem, nomTem, desTem FROM tema ORDER BY nomTem ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function addTema($Tema, $Descripcion){
        $statement = $this->db->prepare("INSERT INTO tema (nomTem, desTem) VALUE (:Tema, :Descripcion)");
        $statement->bindParam(':Tema', $Tema);
        $statement->bindParam(':Descripcion', $Descripcion);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Ctema.php');
        }
    }

    public function updateTema($Id, $Tema, $Descripcion){
        $statement = $this->db->prepare("UPDATE tema SET nomTem = :Tema, desTem = :Descripcion WHERE idTem = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Tema', $Tema);
        $statement->bindParam(':Descripcion', $Descripcion);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Utema.php');
        }
    }

    public function getByIdTema($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM tema WHERE idTem = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function deleteTema($Id){
        $statement = $this->db->prepare("DELETE FROM tema WHERE idTem = :Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Dtema.php');
        }
    }
    // Fin métodos "Temas"


    // Inicio métodos "Indicadores"
    public function getIndicadores(){
        $rows = null;
        $statement = $this->db->prepare("SELECT idInd, numInd, nomInd FROM indicador ORDER BY numInd ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function addIndicador($Indicador, $Descripcion){
        $statement = $this->db->prepare("INSERT INTO indicador (numInd, nomInd) VALUE (:Indicador, :Descripcion)");
        $statement->bindParam(':Indicador', $Indicador);
        $statement->bindParam(':Descripcion', $Descripcion);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Cindicador.php');
        }
    }

    public function updateindicador($Id, $Indicador, $Descripcion){
        $statement = $this->db->prepare("UPDATE indicador SET numInd= :Indicador, nomInd = :Descripcion WHERE idInd = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Indicador', $Indicador);
        $statement->bindParam(':Descripcion', $Descripcion);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Uindicador.php');
        }
    }

    public function getByIdIndicador($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM indicador WHERE idInd = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function deleteIndicador($Id){
        $statement = $this->db->prepare("DELETE FROM indicador WHERE idInd = :Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Dindicador.php');
        }
    }
    // Fin métodos "Indicadores"

    // Inicio métodos "Fuentes"
    public function getFuentes(){
        $rows = null;
        $statement = $this->db->prepare("SELECT idFue, nomFue FROM fuente ORDER BY nomFue ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function addFuente($Fuente){
        $statement = $this->db->prepare("INSERT INTO fuente (nomFue) VALUE (:Fuente)");
        $statement->bindParam(':Fuente', $Fuente);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Cfuente.php');
        }
    }

    public function updateFuente($Id, $Fuente){
        $statement = $this->db->prepare("UPDATE fuente SET nomFue = :Fuente WHERE idFue = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Fuente', $Fuente);
        
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Ufuente.php');
        }
    }

    public function getByIdFuente($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM fuente WHERE idFue = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function deleteFuente($Id){
        $statement = $this->db->prepare("DELETE FROM fuente WHERE idFue = :Id");
        $statement->bindParam(':Id', $Id);
        if($statement->execute()){
            header('Location: ../vista/index.php');
        } else{
            header('Location: ../vista/Dfuente.php');
        }
    }
    // Fin métodos "Fuentes"

    // Inicio método "Relaciones"
    public function getRelaciones(){
        $rows = null;
        $statement = $this->db->prepare("SELECT f.nomCat, f.nomTem, numInd FROM (SELECT p.nomCat, p.nomTem, idInd FROM (SELECT nomCat, nomTem, tema.idTem FROM cat_tema LEFT JOIN categoria ON cat_tema.idCat = categoria.idCat LEFT JOIN tema ON cat_tema.idTem = tema.idTem) p LEFT JOIN tema_ind ON p.idTem = tema_ind.idTem) f LEFT JOIN indicador ON f.idInd = indicador.idInd ORDER BY f.nomCat DESC, f.nomTem ASC, numInd ASC");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    // Inicio método "Relaciones"


    



}

?>