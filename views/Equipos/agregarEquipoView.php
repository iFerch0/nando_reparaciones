<?php include '../header.php'; ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <dv class="card">
                <div class="card-header">
                    <h2 class="text-center">Registrar Equipo</h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="tipo_equipo" class="form-label">Tipo de Equipo:</label>
                            <select class="form-select" name="tipo_equipo" required>
                                <option value="">Selecciona:</option>
                                <?php
                                require_once '../../config/db.php';
                                $query = $conn->query("SELECT * FROM tipo_equipo");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="' . $valores['id'] . '">' . $valores['descripcion'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="marca" class="form-label">Marca:</label>
                            <input type="text" class="form-control" name="marca" required>
                        </div>
                        <div class="mb-3">
                            <label for="modelo" class="form-label">Modelo:</label>
                            <input type="text" class="form-control" name="modelo" required>
                        </div>
                        <div class="mb-3">
                    <label for="serial" class="form-label">Serial:</label>
                    <input type="text" class="form-control" name="serial" required>

                </div>
                <div class="mb-3">
                    <label for="fecha_compra" class="form-label">Fecha de Compra:</label>
                    <input type="date" class="form-control" name="fecha_compra" required>
                </div>
                <div class="input-group">
                        <input type="text" class="form-control" name="id_cliente" id="id_cliente" required>
                        <span class="input-group-btn">
                            <a id="verificarPersona" class="btn btn-primary" href="javascript:void(0);" onclick="">Verificar ID Cliente</a>
                        </span>
                    </div>
                <div class="text-center">
                            <button type="submit" class="btn btn-primary">Registrar Equipo</button>
                        </div>
                    </form>
                </div>
            </dv>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>