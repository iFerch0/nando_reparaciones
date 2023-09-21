<?php
include '../config/db.php';
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cliente = $_POST['id_cliente'];
    $id_equipo = $_POST['serial'];
    $accesorios = $_POST['accesorios'];
    $problema_reportado = $_POST['problema_reportado'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $fecha_entrega = $_POST['fecha_entrega'];
    $id_tecnico = $_POST['id_tecnico'];

    include '../models/ReparacionModel.php';

    $reparacionModel = new ReparacionModel($conn);

    if ($reparacionModel->procesarOrden($id_cliente, $id_equipo, $accesorios, $problema_reportado, $fecha_ingreso, $fecha_entrega, $id_tecnico)) {
        header('Location: ' . BASE_URL . 'controllers/listarReparacionController.php');
    } else {
        echo "No se pudo procesar la orden";
    }
} else {
    echo "Acceso denegado";
}
?>
