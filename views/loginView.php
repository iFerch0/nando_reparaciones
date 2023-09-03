<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIAR SESIÓN</title>
</head>
<body>
    <h2>INICIAR SESION</h2>
    <form action="../controllers/loginController.php" method="post">
        <label for="username">Usuario: </label>
        <input type="text" name="username" required><br><br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>