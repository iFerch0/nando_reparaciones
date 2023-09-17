<?php
define("BASE_URL", "https://e6df-191-108-141-15.ngrok-free.app/nando_reparaciones/");

if (filter_var(BASE_URL, FILTER_VALIDATE_URL) === false) {
    die("La URL base no es válida.");
}
function redirigirSiNoHaySesion() {
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: ' . BASE_URL . 'views/loginView.php');
        exit();
    }
}

?>