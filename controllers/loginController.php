<?php
session_start();
require_once '../config/db.php';
require_once '../models/UserModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['username'];
$password = $_POST['password'];

$userModel = new UserModel();
$user = $userModel->getUserByUsername($username);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header('Location: ../home.php');
    exit();
}else{
    echo "Credenciales incorrectas. <a href='../index.php'>Volver a intentarlo</a>";
}
}
?>