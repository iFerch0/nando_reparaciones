<?php 
include '../header.php'; 
include '../../config/db.php'; 
?>

<div class="container mt-5">
    <h2 class="text-center"><i class="fas fa-desktop text-primary"></i> Lista de Equipos</h2>

    <form class="form-group" method="post" action="buscarSerialController.php">
        <label for="buscarSerial"><i class="fas fa-search text-primary"></i> Buscar Serial:</label>
        <div class="input-group">
            <input type="text" class="form-control" id="buscarSerial" name="buscarSerial">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Buscar</button>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th><i class="fas fa-laptop text-primary"></i> Tipo de Equipo</th>
                <th><i class="fas fa-tag text-primary"></i> Marca</th>
                <th><i class="fas fa-tag text-primary"></i> Modelo</th>
                <th><i class="fas fa-barcode text-primary"></i> Serial</th>
                <th><i class="fas fa-calendar-day text-primary"></i> Fecha de Compra</th>
                <th>ID Persona</th>
                <th><i class="fas fa-cogs text-primary"></i> Acciones</th>
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
                        <a href="<?= BASE_URL . 'controllers/editarEquipoController.php?id=' . $row['id'] ?>" class='btn btn-primary'><i class="fas fa-edit"></i> Editar</a>
                        <a href="<?= BASE_URL . 'controllers/eliminarEquipoController.php?id=' . $row['id'] ?>" class='btn btn-danger' onclick="return confirm('¿Está seguro de que desea eliminar este equipo?')"><i class="fas fa-trash"></i> Eliminar</a>
                    </td>
                </tr>
            <?php }
            $conn->close(); ?>
        </tbody>
    </table>
</div>

<?php include '../footer.php'; ?>
