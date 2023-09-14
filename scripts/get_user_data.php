<?php
require_once '../config/db.php';

$id_cliente = $_GET['id'];

// Consulta para obtener nombres y apellidos usando la identificación como referencia
$sql = "SELECT nombres, apellidos, telefono FROM personas WHERE id = '$id_cliente'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Crear un arreglo con los datos de usuario
    $userData = array(
        'name' => $row['nombres'],
        'lastName' => $row['apellidos'],
        'telefono' => $row['telefono'] // Agregar el campo 'telefono'
    );
    
    // Devolver los datos en formato JSON
    echo json_encode($userData);
} else {
    // Devolver una respuesta JSON indicando que no se encontraron datos
    echo json_encode(array('error' => 'NULL'));
}


// Cerrar la conexión
$conn->close();
?>