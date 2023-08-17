<?php
// index.php

// Cargar archivos de configuración
require_once 'config/conexion.php';

// Cargar clases de modelos y controladores
require_once 'models/UserModel.php';
require_once 'controllers/UserController.php';

// Crear una instancia de la conexión a la base de datos
$conexion = new Conexion();
$db = $conexion->obtenerConexion();

// Crear instancias de los modelos y controladores
$userModel = new UserModel($db);
$userController = new UserController($userModel);

// Determinar la acción solicitada
$action = isset($_GET['action']) ? $_GET['action'] : 'inicio';

// Enrutamiento
switch ($action) {
    case 'crear_usuario':
        include 'views/user/create.php';
        break;
    case 'guardar_usuario':
        // Procesar el formulario para guardar un usuario
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userController->createUser($username, $email, $password);
        // Redireccionar a una página de éxito o mostrar un mensaje
        break;
    case 'ver_usuario':
        // Ver detalles de un usuario
        $userId = $_GET['user_id'];
        $user = $userController->getUser($userId);
        include 'views/user/view.php';
        break;
    
    default:
        // Página de inicio o manejo de error 404
        include 'views/home.php';
        break;
}
?>