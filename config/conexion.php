<?php

class Conexion {
    private $host = "localhost";
    private $usuario = "root";
    private $contrasena = "";
    private $baseDeDatos = "nando_reparaciones";
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->contrasena, $this->baseDeDatos);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function obtenerConexion() {
        return $this->conexion;
    }
}
?>