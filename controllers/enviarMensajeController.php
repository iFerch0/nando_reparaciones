<?php
        include '../config/db.php';
        include '../config/config.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

             date_default_timezone_set('America/Bogota');
             $nombre = $_POST['nombre'];
             $email = $_POST['email'];
             $mensaje = $_POST['mensaje'];
             $fecha = date('Y-m-d H:i:s');

             include '../models/contactoModelo.php';

             $contactoModel = new ContactoModel($conn);

             if($contactoModel->guardarMensaje($nombre, $email, $mensaje, $fecha)){
                echo "Mensaje enviado correctamente";
                header('Location: ' . BASE_URL . '/views/contactoView.php');
             }else{
                echo "No se pudo enviar el mensaje";
             }
             }else{
                echo "Acceso denegado";
             
        }
?>
