<?php
require_once '../config/db.php';

$identificacion = $_GET['identificacion'];

// Consulta para obtener nombres y apellidos usando la identificación como referencia
$sql = "SELECT nombres, apellidos FROM personas WHERE identificacion = '$identificacion'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Crear un arreglo con los datos de usuario
    $userData = array(
        'name' => $row['nombres'],
        'lastName' => $row['apellidos']
    );
    
    // Devolver los datos en formato JSON
    echo json_encode($userData);
} else {
    // Devolver una respuesta JSON indicando que no se encontraron datos
    echo json_encode(array('error' => 'No se encontraron datos para la identificación proporcionada.'));
}


// Cerrar la conexión
$conn->close();
?>