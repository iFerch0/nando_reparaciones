<?php
require_once(__DIR__ . "/db/db.php");
require_once(__DIR__ . "/controllers/personas_controller.php");

$controller = new personas_controller();

if(isset($_POST['guardar_persona'])){
    $controller->guardar();
}

$controller->mostrarLista();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>GUARDAR PERSONA</h1>
    <form method="post" action="">
        <label>Nombres</label>
        <input type="text" name="nombre" required><br>
        <label>Identificacion: </label>
        <input type="text" name="identificacion" required><br>
        <button type="submit" name="guardar_persona"> GUARDAR</button>
    </form>
</body>
</html>