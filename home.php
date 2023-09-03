<?php
session_start();

if(!isset($_SESSIOM['user_id'])){
    header('location: ../views/homeView.php');
   echo "Bienvenido al menu Principal";

    exit();
}
?>