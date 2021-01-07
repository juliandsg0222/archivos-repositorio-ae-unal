<?php

class Conexion{

    protected $db;
    private $driver = 'mysql';
    private $host = 'localhost';
    private $bd = 'repositorio_ae_manizales_unal_2021';
    private $usuario = 'unalmanae';
    private $contrasena = "#2021repositorio2020autoevaluacionunalman&%";
  
    public function __construct()
    {
        try {
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->bd}", $this->usuario, $this->contrasena);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo "Ha surgido un error al tratar de conectarse a la base de datos. Error: " . $e->getMessage();
        }
    }
}

?>