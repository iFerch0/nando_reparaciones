<?php
session_start();
require_once '../partials/header.php';
?>


<h1>Lista de Clientes</h1>
<table>
    <tr>
        <th>ID de Cliente</th>    
        <th>Identificacion</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Telefono</th>       
    </tr>
    <?php foreach ($clientes as $cliente):?>
        <tr>
            <td><?php echo $cliente['cliente_id']; ?></td>
            <td><?php echo $cliente['identificacion']; ?></td>
            <td><?php echo $cliente['nombre']; ?></td>
            <td><?php echo $cliente['apellido']; ?></td>
            <td><?php echo $cliente['email']; ?></td>
            <td><?php echo $cliente['telefono']; ?></td>
        </tr>
        <?php endforeach; ?>
</table>

<?php require_once '../partials/footer.php';?>