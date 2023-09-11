<?php
class PersonaModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function guardarPersona($tipo_identificacion, $identificacion, $nombres, $apellidos, $direccion, $telefono) {
        try {
            $sql = "INSERT INTO personas (tipo_id, identificacion, nombres, apellidos, direccion, telefono) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssssss", $tipo_identificacion, $identificacion, $nombres, $apellidos, $direccion, $telefono);
            
            if ($stmt->execute()) {
                $stmt->close();
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            // Manejar la excepción de la base de datos aquí, si es necesario.
            return false;
        }
    }
}
?>
