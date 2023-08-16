<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR USUARIO</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form action="index.php?action=guardar_usuario" method="POST">
        <label for="username">Nombre de Usuario: </label>
        <input type="text" id="username" name="username"><br>

        <label for="password">Contraseña: </label>
        <input type="password" id="password" name="password"><br>

        <label for="email">Correo Electronico</label>
        <input type="email" id="email" name="email"><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>