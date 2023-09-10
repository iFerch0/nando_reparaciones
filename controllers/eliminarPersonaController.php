<?php
    include '../config/db.php';
    include '../models/editarPersonaModel.php';

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $editarPersona = new EditarPersonaModel($conn);
        
        if ($editarPersona->eliminarPersona($id)) {
            header('Location:../views/Personas/personaView.php');
            exit();
        }else{
            echo "Error al eliminar la persona";
        }
    }else{
        echo "ID de persona incorrecto";
    }
?>