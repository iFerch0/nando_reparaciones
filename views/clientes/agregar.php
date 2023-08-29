<?php 
session_start();
require_once '../partials/header.php';
 ?>


<h1>Agregar Cliente</h1>

<form action="../index.php" method="post">

<label for="identificacion">Identificacion: </label>
<input type="text" name="identificacion" >    

<label for="nombre">Nombre: </label>
<input type="text" name="nombre"required>

<label for="apellido">Apellido: </label>
<input type="text" name="apellido" required>

<label for="email">Email: </label>
<input type="email" name="email">

<label for="telefono">Telefono: </label>
<input type="text" name="telefono">

<input type="submit" value="Agregar Cliente">
</form>

<?php require_once '../partials/footer.php';?>
