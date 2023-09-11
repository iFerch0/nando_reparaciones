<?php

class UserModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getUserByUsername($username) {
        $sql = "SELECT * FROM usuarios WHERE username = ?";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . $this->conn->error);
        }

        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();
        if (!$result) {
            throw new Exception("Error en la obtención del resultado: " . $stmt->error);
        }

        $user = $result->fetch_assoc();

        $stmt->close();

        return $user;
    }
}

// Ejemplo de uso:
// $db = new mysqli("localhost", "usuario", "contraseña", "basededatos");
// $userModel = new UserModel($db);
// $userData = $userModel->getUserByUsername("nombredeusuario");

?>
