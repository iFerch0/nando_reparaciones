<?php

try {
    $username = 'root';
    $password = '';
    $servername = 'localhost';
    $databasename = 'nando_reparaciones';

    $conn = mysqli_connect($servername, $username, $password, $databasename);

    if ($conn === false) {
        throw new Exception("Conexión fallida: " . mysqli_connect_error());
    }else{
        echo "Conexión exitosa";
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>