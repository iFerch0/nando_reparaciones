<?php

require_once 'db/db.php';
require_once 'controllers/AuthController.php';

$db = Conectar::conexion();
$authController = new AuthController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $authController->login($username, $password);
}

include 'views/login.php';

?>