<?php include '../header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center">Lista de Personas</h2>
    <div class="form-group">
        <label for="buscarIdentificacion">Buscar por Identificación:</label>
        <div class="input-group">
            <input type="text" class="form-control" id="buscarIdentificacion" placeholder="Ingrese la identificación">
            <button class="btn btn-primary" id="btnBuscar">Buscar</button>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Identificación</th>
                <th>Número de Identificación</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Dirección</th>
                <th>Número de Teléfono</th>
                <th>Opciones</th>
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
            echo "<td><a href='" . BASE_URL . "controllers/editarPersonaController.php?id=" . $row['id'] . "' class='btn btn-primary'>Editar</a></td>";
            echo "<td><a href='eliminar_persona.php?id=".$row['id']."' class='btn btn-danger'>Eliminar</a></td>";
            echo "</tr>";
        }
        $conn->close();
        ?>

        </tbody>
    </table>
</div>

<?php include '../footer.php'; ?>
