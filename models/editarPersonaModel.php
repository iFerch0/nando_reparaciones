<?php
include_once '../config/db.php';

class EditarPersonaModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function obtenerPersonaPorID($id){
        $id = mysqli_real_escape_string($this->conn, $id); // Prevenir SQL injection
        $query = "SELECT * FROM personas WHERE id = '$id'";
        $result = mysqli_query($this->conn, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }

    public function actualizarPersona($id, $tipo_id, $identificacion, $nombres, $apellidos, $direccion, $telefono) {
        $id = mysqli_real_escape_string($this->conn, $id); // Prevenir SQL injection
        $tipo_id = mysqli_real_escape_string($this->conn, $tipo_id);
        $identificacion = mysqli_real_escape_string($this->conn, $identificacion);
        $nombres = mysqli_real_escape_string($this->conn, $nombres);
        $apellidos = mysqli_real_escape_string($this->conn, $apellidos);
        $direccion = mysqli_real_escape_string($this->conn, $direccion);
        $telefono = mysqli_real_escape_string($this->conn, $telefono);

        $query = "UPDATE personas SET 
            tipo_id = '$tipo_id',
            identificacion = '$identificacion',
            nombres = '$nombres',
            apellidos = '$apellidos',
            direccion = '$direccion',
            telefono = '$telefono'
            WHERE id = '$id'";

        return mysqli_query($this->conn, $query);
    }

    public function eliminarPersona($id) {
        $id = mysqli_real_escape_string($this->conn, $id); // Prevenir SQL injection
        $query = "DELETE FROM personas WHERE id = '$id'";
        return mysqli_query($this->conn, $query);
    }
}
?>
