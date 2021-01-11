<?php

require_once('../../conexion.php');
session_start();

class Usuarios extends Conexion {
    
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function login($user, $password)
    {
        $statement = $this->db->prepare("SELECT idUsu, nomUsu, passUsu, nomRol FROM usuario LEFT JOIN rol ON usuario.rolUsu = rol.idRol WHERE idUsu = :Usuario AND passUsu = :Password");
        $statement->bindParam(':Usuario', $user);
        $statement->bindParam(':Password', $password);
        $statement->execute();
        if($statement->rowCount() == 1){
            $result = $statement->fetch();
            $_SESSION['USUARIO'] = $result["nomUsu"];
            $_SESSION['ID'] = $result["idUsu"];
            $_SESSION['ROL'] = $result["nomRol"];
            return true;
        }

        return false;
    }

    public function getNombre(){
        return $_SESSION['USUARIO'];
    }

    public function getId(){
        return $_SESSION['ID'];
    }

    public function getPerfil(){
        return $_SESSION['ROL'];
    }

    public function validateSession(){
        if($_SESSION['ID'] == null){
            header('Location: ../../index.php');
        }
    }

    public function validateSessionSuperAdmin(){
        if($_SESSION['ID'] != null){
            if($_SESSION['ROL'] != 'SUPERADMIN'){
                header('Location: ../../rol-editar/vista/index.php');
            }
        }
    }

    public function validateSessionAdministrator(){
        if($_SESSION['ID'] != null){
            if($_SESSION['ROL'] != 'ADMINISTRADOR'){
                header('Location: ../../rol-editar/vista/index.php');
            }
        }
    }

    public function salir(){
        $_SESSION['USUARIO'] = null;
        $_SESSION['ID'] = null;
        $_SESSION['ROL'] = null;
        session_destroy();
        header('Location: ../../index.php');
    }
}

?>