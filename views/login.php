<?php 
session_start();
require_once 'partials/header.php';
 ?>


<h1>Iniciar Sesion</h1>
<form action="../index.php" method="post">
    <label for="username">Usuario:</label>
    <input type="text" name="username" required>
    <label for="password">Contrasena:</label>
    <input type="password" name="password" required>
    <input type="submit" value="Iniciar Sesion">
</form>

<?php require_once 'partials/footer.php';?>