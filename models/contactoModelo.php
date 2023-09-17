<?php
class contactoModel {
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function guardarMensaje($nombre, $correo, $mensaje, $fecha){
        $sql = "INSERT INTO mensajes_contacto (nombre, email, mensaje, fecha) VALUES (?, ?, ?, ?)";
        $resultado = $this->conn->prepare($sql);
        $resultado->bind_param("ssss", $nombre, $correo, $mensaje, $fecha);

        if ($resultado->execute()) {
            $resultado->close();
            return true;
        } else{
            return false;
        }
    }
}
?>
