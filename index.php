<?php
session_start();
require_once 'db/db.php';

if(!isset($_SESSION['username'])){
    header('Location: views/login.php');
    exit();
}

require_once 'controllers/ClientesController.php';
require_once 'controllers/AuthController.php';


$db = Conectar::conexion();
$clientesController = new ClientesController($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

switch ($action) {
    case 'listar':
        $clientesController->listarClientes();
        break;
    case 'agregar':
        $clientesController->mostrarFormularioCliente();
        break;
    default:
        echo "Accion no válida";
        break;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $authController->login($username, $password);
}

include 'views/login.php';

?>