<?php
require_once(__DIR__ . '/../config/config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NANDO_REPARACIONES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="<?php echo BASE_URL; ?>scripts/scripts.js"></script>
</head>
<body>
    <header>
        <!-- Encabezado común a todas las páginas -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo BASE_URL; ?>views/homeView.php">NANDO_REPARACIONES</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>views/homeView.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="agregarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Agregar
                            </a>
                            <div class="dropdown-menu" aria-labelledby="agregarDropdown">
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/agregarOrdenView.php">Agregar orden</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/Personas/agregarPersonaView.php">Agregar Persona</a>
                                <a class="dropdown-item" href="#">Agregar Equipo</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="verDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ver
                            </a>
                            <div class="dropdown-menu" aria-labelledby="verDropdown">
                                <a class="dropdown-item" href="#">Ver ordenes</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/Personas/personaView.php">Ver personas</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/Equipos/equiposView.php">Ver equipos</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto"> <!-- Coloca elementos a la derecha -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>logout.php">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
