<?php
define("BASE_URL", "https://nandoreparaciones-575708d2f7d2.herokuapp.com/");

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