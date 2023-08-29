<?php
class ClienteModel{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function agregarCliente($identificacion, $nombre, $apellido, $email, $telefono){
        $query = "INSERT INTO clientes (identificacion, nombre, apellido, email, telefono) VALUES ($identificacion, $nombre, $apellido, $email, $telefono)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("isssi", $identificacion, $nombre, $apellido, $email, $telefono);
        return $stmt->execute();
    }
    public function obtenerClientes(){
        $query = "SELECT * FROM clientes";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}