<?php

class Conexion{

    protected $db;
    private $driver = 'mysql';

    // Conexión en servidor local
    // private $host = 'localhost';
    // private $bd = 'repositorio_ae_manizales_unal_2021';
    // private $usuario = 'root';
    // private $contrasena = "";

    // // Conexion dentro del servidor
    private $host = '127.0.0.1';
    private $bd = 'repositorio_ae_manizales_unal_2021';
    private $usuario = 'AdminDB';
    private $contrasena = "A1Z9B2Y8REPOSITORIO";

  
    public function __construct()
    {
        try {
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->bd};", $this->usuario, $this->contrasena);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo "Ha surgido un error al tratar de conectarse a la base de datos. Error: " . $e->getMessage();
        }
    }
}

?>