<?php
session_start();
require_once 'config/config.php';

if(!isset($_SESSIOM['user_id'])){
    header('Location: ' . BASE_URL . 'views/homeView.php');
    echo "Bienvenido al menu Principal";

    exit();
}
?>