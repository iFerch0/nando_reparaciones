<?php
include '../config/db.php';

$identificacion = $_POST['identificacion'];

$query = "SELECT * FROM personas WHERE identificacion LIKE '%$identificacion%' ORDER BY id DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['tipo_id']."</td>";
                echo "<td>".$row['identificacion']."</td>";
                echo "<td>".$row['nombres']."</td>";
                echo "<td>".$row['apellidos']."</td>";
                echo "<td>".$row['direccion']."</td>";
                echo "<td>".$row['telefono']."</td>";
                echo "<td><a href='editar_persona.php?id=".$row['id']."' class='btn btn-primary'>Editar</a></td>";
                echo "<td><a href='eliminar_persona.php?id=".$row['id']."' class='btn btn-danger'>Eliminar</a></td>";
                echo "</tr>";
}

mysqli_close($conn);
?>
