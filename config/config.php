<?php
define("BASE_URL", "http://localhost/nando_reparaciones/");

// Comprueba si la URL base es válida
if (filter_var(BASE_URL, FILTER_VALIDATE_URL) === false) {
    die("La URL base no es válida.");
}
?>