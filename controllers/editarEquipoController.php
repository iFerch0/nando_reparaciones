<?php
include '../config/db.php';
include '../config/config.php';
include '../models/EquipoModel.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $model = new EquipoModel($conn);
    $equipo = $model->obtenerEquipoPorID($id);

    if ($equipo) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipo_equipo = $_POST['tipo_equipo'];
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $serial = $_POST['serial'];
            $fecha_compra = $_POST['fecha_compra'];

            // Validación de datos
            if (empty($tipo_equipo) || empty($marca) || empty($modelo) || empty($serial) || empty($fecha_compra)) {
                $error_message = "Todos los campos son obligatorios.";
            } else {
                // Realizar la edición del equipo
                if ($model->editarEquipo($id, $tipo_equipo, $marca, $modelo, $serial, $fecha_compra)) {
                    header('Location: ' . BASE_URL . 'views/Equipos/equiposView.php');
                    exit();
                } else {
                    $error_message = "Error al actualizar el equipo.";
                }
            }
        }

        include '../views/Equipos/editarEquipoView.php';
    } else {
        echo "ID de equipo no válido";
    }
} else {
    echo "ID de equipo no válido";
}
?>
