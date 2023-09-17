<?php include '../header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center"><i class="fas fa-users text-primary"></i> Lista de Personas</h2>
    <div class="form-group">
        <label for="buscarIdentificacion"><i class="fas fa-search text-primary"></i> Buscar por Identificación:</label>
        <div class="input-group">
            <input type="text" class="form-control" id="buscarIdentificacion" placeholder="Ingrese la identificación">
            <div class="input-group-append">
                <button class="btn btn-primary" id="btnBuscar"><i class="fas fa-search"></i> Buscar</button>
            </div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th><i class="fas fa-id-card text-primary"></i> Tipo de Identificación</th>
                <th><i class="fas fa-address-card text-primary"></i> Número de Identificación</th>
                <th><i class="fas fa-user text-primary"></i> Nombres</th>
                <th><i class="fas fa-user text-primary"></i> Apellidos</th>
                <th><i class="fas fa-map-marker-alt text-primary"></i> Dirección</th>
                <th><i class="fas fa-phone text-primary"></i> Número de Teléfono</th>
                <th><i class="fas fa-cogs text-primary"></i> Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php  
        include '../../config/db.php';  
        $sql = "SELECT * FROM personas ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['tipo_id']."</td>";
            echo "<td>".$row['identificacion']."</td>";
            echo "<td>".$row['nombres']."</td>";
            echo "<td>".$row['apellidos']."</td>";
            echo "<td>".$row['direccion']."</td>";
            echo "<td>".$row['telefono']."</td>";
            echo "<td><a href='" . BASE_URL . "controllers/editarPersonaController.php?id=" . $row['id'] . "' class='btn btn-primary'><i class='fas fa-edit'></i> Editar</a></td>";
            echo "<td><a href='" . BASE_URL . "controllers/eliminarPersonaController.php?id=" . $row['id'] . "' class='btn btn-danger' onclick=\"return confirm('¿Está seguro de que desea eliminar a esta persona?')\"><i class='fas fa-trash'></i> Eliminar</a></td>";
            echo "</tr>";
        }
        $conn->close();
        ?>
        </tbody>
    </table>
</div>

<?php include '../footer.php'; ?>
