<?php

require_once('../../conexion.php');
session_start();

class Usuarios extends Conexion
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function login($user, $password)
    {
        $statement = $this->db->prepare("SELECT idUsu, usuUsu, nomUsu, passUsu, nomRol FROM usuario LEFT JOIN rol ON usuario.rolUsu = rol.idRol WHERE usuUsu = :Usuario");
        $statement->bindParam(':Usuario', $user);
        $statement->execute();
        while ($registro = $statement->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($password, $registro["passUsu"])) {
                echo json_encode(array('error' => false));
                $_SESSION['USUARIO'] = $registro["nomUsu"];
                $_SESSION['NICK'] = $registro["usuUsu"];
                $_SESSION['ID'] = $registro["idUsu"];
                $_SESSION['ROL'] = $registro["nomRol"];
                return true;
            }
        }
        echo json_encode(array('error' => true));
        return false;
    }

    public function getNombre()
    {
        return $_SESSION['USUARIO'];
    }

    public function getNick()
    {
        return $_SESSION['NICK'];
    }

    public function getId()
    {
        return $_SESSION['ID'];
    }

    public function getPerfil()
    {
        return $_SESSION['ROL'];
    }

    public function validateSession()
    {
        if ($_SESSION['ID'] == null) {
            header('Location: ../../index.php');
        }
    }

    public function validateSessionAdministrator()
    {
        if ($_SESSION['ID'] != null) {
            if ($_SESSION['ROL'] != 'ADMINISTRADOR') {
                header('Location: ../../rol-editar/vista/index.php');
            }
        }
    }

    public function validateSessionEditor()
    {
        if ($_SESSION['ID'] != null) {
            if ($_SESSION['ROL'] != 'ADMINISTRADOR' || $_SESSION['ROL'] != 'EDITOR') {
                header('Location: ../../rol-editar/vista/index.php');
            }
        }
    }

    public function salir()
    {
        $_SESSION['USUARIO'] = null;
        $_SESSION['ID'] = null;
        $_SESSION['ROL'] = null;
        session_destroy();
        header('Location: ../../index.php');
    }
}
