<?php
require_once(__DIR__ . '/../config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Incluir Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="../css/styles.css">-->
    <style>
        /* Estilos personalizados */
        .login-container {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="login-container">
                <h2 class="text-center">Iniciar Sesión</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center mb-4">
                        <img src="<?php echo BASE_URL; ?>img/logo_login.png" alt="Imagen de inicio de sesión" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="<?php echo BASE_URL; ?>controllers/loginController.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Usuario:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <div class="text-danger" id="error-message">
                                    <?php if (isset($error_message)) echo $error_message; ?>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Incluir Bootstrap 5 JS, Popper y jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+mrP5l81q9ZIK9zF5dF/1m5D8tiP0pYjXtXn2N5p6D5Dz2y6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+mrP5l81q9ZIK9zF5dF/1m5D8tiP0pYjXtXn2N5p6D5Dz2y6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-6Qz5JkALBqG1f1q1F6HssV5n5uA6fi5/tf4r5+d5f5E5O2F4I7c1on6zv5q0r5w3e" crossorigin="anonymous"></script>
</body>
</html>
