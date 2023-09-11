<?php
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo_identificacion = $_POST['tipo_identificacion'];
    $identificacion = $_POST['identificacion'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    include '../models/PersonasModel.php';

    $personaModel = new PersonaModel($conn);

    if ($personaModel->guardarPersona($tipo_identificacion, $identificacion, $nombres, $apellidos, $direccion, $telefono)) {
        echo "La persona se ha registrado exitosamente.";
        header('Location: ../views/Personas/personaView.php');
    } else {
        echo "Hubo un error al registrar la persona.";
    }
} else {
    echo "Acceso no autorizado";
}
?>
