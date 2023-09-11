<?php 
include '../header.php'; 
include '../../config/db.php'; 
?>

<div class="container mt-5">
    <h2 class="text-center">Lista de equipos</h2>

    <form class="form-group" method="post action="buscarSerialController.php">
        <label for="buscarSerial">Buscar serial:</label>
        <div class="input-group">
            <input type="text" class="form-control" id="buscarSerial" name="buscarSerial">
            <input type="submit" value="Buscar" class="btn btn-primary">
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Equipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Serial</th>
                <th>Fecha de Compra</th>
                <th>ID Persona</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = "SELECT * FROM equipos ORDER BY id DESC";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['tipo_equipo'] ?></td>
                    <td><?= $row['marca'] ?></td>
                    <td><?= $row['modelo'] ?></td>
                    <td><?= $row['serial'] ?></td>
                    <td><?= $row['fecha_compra'] ?></td>
                    <td><?= $row['persona_id'] ?></td>
                    <td>
                        <a href="<?= BASE_URL . 'controllers/editarEquipoController.php?id=' . $row['id'] ?>" class='btn btn-primary'>Editar</a>
                        <a href="<?= BASE_URL . 'controllers/eliminarEquipoController.php?id=' . $row['id'] ?>" class='btn btn-danger' onclick="return confirm('¿Está seguro de que desea eliminar este equipo?')">Eliminar</a>
                    </td>
                </tr>
            <?php }
            $conn->close(); ?>
        </tbody>
    </table>
</div>

<?php include '../footer.php'; ?>