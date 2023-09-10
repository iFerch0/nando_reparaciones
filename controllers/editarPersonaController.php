<?php
    include '../config/db.php';
    include '../config/config.php';

    include '../models/editarPersonaModel.php';

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
    
        // Crear una instancia del modelo y obtener los datos de la persona
        $model = new EditarPersonaModel($conn);
        $persona = $model->obtenerPersonaPorID($id);
    
        if ($persona) {
            // Verificar si se envió el formulario de edición
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $tipo_id = $_POST['tipo_id'];
                $identificacion = $_POST['identificacion'];
                $nombres = $_POST['nombres'];
                $apellidos = $_POST['apellidos'];
                $direccion = $_POST['direccion'];
                $telefono = $_POST['telefono'];
    
                // Actualizar los datos de la persona
                if ($model->actualizarPersona($id, $tipo_id, $identificacion, $nombres, $apellidos, $direccion, $telefono)) {
                    // Redirigir a la vista de listado de personas después de la edición
                    header('Location: ' . BASE_URL . 'views/Personas/personaView.php');
                    exit();
                } else {
                    $error_message = "Error al actualizar la persona";
                }
            }
    
            // Cargar la vista de edición de persona
            include '../views/Personas/editarPersonaView.php';
        } else {
            // Mostrar un mensaje de error si no se encontró la persona
            echo "La persona no existe.";
        }
    } else {
        // Mostrar un mensaje de error si no se proporcionó un ID válido
        echo "ID de persona no válido.";
    }
    ?>