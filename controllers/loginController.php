<?php
session_start();
require_once '../config/db.php';
require_once '../models/UserModel.php';
require_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Crear una instancia de UserModel pasando la conexión a la base de datos
    $userModel = new UserModel($conn);

    // Obtener el usuario por nombre de usuario
    $user = $userModel->getUserByUsername($username);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: ../home.php');
        exit();
    } else {
        header('Location: ../index.php?error=1');
        exit();
    }
}
?>
