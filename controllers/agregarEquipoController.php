<?php
    include '../config/db.php';
    include '../config/config.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $tipo_equipo = $_POST['tipo_equipo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $serial = $_POST['serial'];
        $fecha_compra = $_POST['fecha_compra'];
        $persona_id = $_POST['id_cliente'];

        include '../models/EquipoModel.php';

        $equipoModel = new EquipoModel($conn);

        if ($equipoModel->guardarEquipo($tipo_equipo, $marca, $modelo, $serial, $fecha_compra, $persona_id)){
            echo "La persona se ha registrado correctamente";
            header('Location: ' . BASE_URL . '/views/Equipos/equiposView.php');
        }else{
            echo "No se pudo registrar la persona";
        }
        } else{
            echo "Acceso Denegado";
    }
?>