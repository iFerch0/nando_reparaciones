<?php
define("DB_SERVER", "ebh2y8tqym512wqs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com");
define("DB_USERNAME", "ordrhroqn9a7t0lw");
define("DB_PASSWORD", "lyhaokg70m3u7f5z");
define("DB_DATABASE", "ng0ks1scgajuj9qf");

try {
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $conn->set_charset("utf8");

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }
} catch (Exception $e) {
    echo $e->getMessage();
    $conn->close();
}
?>