<?php include 'header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center">Agregar Orden de Reparación</h2>
    <form action="procesar_orden.php" method="post">
        <!-- Datos del Cliente -->
        <h4 class="mt-4">Datos del Cliente</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="id_cliente" class="form-label">ID de Cliente</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="id_cliente" id="id_cliente" required>
                        <span class="input-group-btn">
                            <a id="loadDataButton" class="btn btn-primary" href="javascript:void(0);" onclick="">Cargar Datos</a>
                            <a href="<?php echo BASE_URL ?>/views/Personas/agregarPersonaView.php" class="btn btn-primary">Agregar Cliente</a>
                        </span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nombres" class="form-label">Nombres:</label>
                            <input type="text" class="form-control" name="nombres" id="nombres" required>
                        </div>
                        <div class="col-md-6">
                            <label for="apellidos" class="form-label">Apellidos:</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="telefono" class="form-label">Número de Teléfono:</label>
                    <input type="tel" class="form-control" name="telefono" id="telefono" required>
                </div>
            </div>
        </div>

        <!-- Datos del Equipo de Computo -->
        <h4 class="mt-4">Datos del Equipo de Computo</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="tipo_equipo" class="form-label">Tipo de Equipo:</label>
                    <select class="form-select" name="tipo_equipo" required>
                        <option value="">Selecciona:</option>
                        <?php
                        require_once '../config/db.php';
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
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="serial" class="form-label">Serial:</label>
                    <input type="text" class="form-control" name="serial" required>
                </div>
                <div class="mb-3">
                    <label for="accesorios" class="form-label">Accesorios:</label>
                    <textarea class="form-control" name="accesorios" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="accesorios" class="form-label">Problema reportado:</label>
                    <textarea class="form-control" name="problema_reportado" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="tecnico" class="form-label">Nombre del Técnico:</label>
            <input type="text" class="form-control" name="tecnico" required>
        </div>

        <!-- Fechas -->
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="fecha_ingreso" class="form-label">Fecha de Ingreso:</label>
                    <input type="date" class="form-control" name="fecha_ingreso" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="fecha_entrega" class="form-label">Fecha de Entrega:</label>
                    <input type="date" class="form-control" name="fecha_entrega" required>
                </div>
            </div>
        </div>

        <!-- Botón para enviar el formulario -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Orden</button>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>
