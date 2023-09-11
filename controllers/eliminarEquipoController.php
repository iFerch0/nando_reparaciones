<?php
    include '../config/db.php';
    include '../models/EquipoModel.php';

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $editarEquipo = new EquipoModel($conn);

        if($editarEquipo->eliminarEquipo($id)){
            header('Location:../views/Equipos/equiposView.php');
        }else{
            echo "Error al eliminar persona";
        }
     
    }else{
        echo "ID de equipo incorrecto";
    }
    ?>