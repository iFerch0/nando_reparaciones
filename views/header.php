<?php
require_once(__DIR__ . '/../config/config.php');
redirigirSiNoHaySesion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NANDO_REPARACIONES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="<?php echo BASE_URL; ?>scripts/scripts.js"></script>
    <script src="https://kit.fontawesome.com/ed59a97fd7.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!-- Encabezado común a todas las páginas -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo BASE_URL; ?>views/homeView.php">
                    <i class="fas fa-tools"></i> NANDO_REPARACIONES
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>views/homeView.php">
                                <i class="fas fa-home"></i> Inicio
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="agregarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-plus"></i> Agregar
                            </a>
                            <div class="dropdown-menu" aria-labelledby="agregarDropdown">
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/Reparacion/agregarOrdenView.php">
                                    <i class="fas fa-wrench"></i> Agregar orden
                                </a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/Personas/agregarPersonaView.php">
                                    <i class="fas fa-user-plus"></i> Agregar Persona
                                </a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/Equipos/agregarEquipoView.php">
                                    <i class="fas fa-desktop"></i> Agregar Equipo
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="verDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-eye"></i> Ver
                            </a>
                            <div class="dropdown-menu" aria-labelledby="verDropdown">
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>controllers/listarReparacionController.php">
                                    <i class="fas fa-list"></i> Ver ordenes
                                </a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/Personas/personaView.php">
                                    <i class="fas fa-users"></i> Ver personas
                                </a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>views/Equipos/equiposView.php">
                                    <i class="fas fa-cogs"></i> Ver equipos
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>views/contactoView.php">
                                <i class="fas fa-envelope"></i> Contacto
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto"> <!-- Coloca elementos a la derecha -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>logout.php">
                                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>