<?php
    include '../config/db.php';

    $serial = $_GET['serial'];

    $sql = "SELECT * FROM equipos WHERE serial = '$serial'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $userData = array(
            'tipo_equipo' => $row['tipo_equipo'],
            'marca' => $row['marca'],
            'modelo' => $row['modelo'],
            'serial' => $row['serial']
        );
        echo json_encode($userData);
    }else{
        echo json_encode(array('error' => 'NULL'));
    }
    $conn->close();
?>