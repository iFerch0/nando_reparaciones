<?php include '../header.php'; ?>

<main class="container mt-5">
    <h2 class="text-center"><i class="fas fa-wrench text-primary"></i> Agregar Orden de Reparación</h2>
    <form action="<?php echo BASE_URL; ?>controllers/agregarReparacionController.php" method="post">
        <h4 class="mt-4"><i class="fas fa-user text-primary"></i> Datos del Cliente</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="id_cliente" class="form-label"><i class="fas fa-id-card"></i> ID de Cliente</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="id_cliente" id="id_cliente" required>
                        <span class="input-group-btn">
                            <a id="loadDataButton" class="btn btn-primary" href="javascript:void(0);" onclick=""><i class="fas fa-search"></i> Cargar Datos</a>
                            <a href="<?php echo BASE_URL ?>/views/Personas/agregarPersonaView.php" class="btn btn-primary"><i class="fas fa-user-plus"></i> Agregar Cliente</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="telefono" class="form-label"><i class="fas fa-phone"></i> Número de Teléfono:</label>
                    <input type="tel" class="form-control" name="telefono" id="telefono" readonly>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <label for="nombres" class="form-label"><i class="fas fa-user"></i> Nombres:</label>
                    <input type="text" class="form-control" name="nombres" id="nombres" readonly>
                </div>
                <div class="col-md-6">
                    <label for="apellidos" class="form-label"><i class="fas fa-user"></i> Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" readonly>
                </div>
            </div>
        </div>
        <!-- Datos del Equipo de Computo -->
        <h4 class="mt-4"><i class="fas fa-desktop text-primary"></i> Datos del Equipo de Computo</h4>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="serial" class="form-label"><i class="fas fa-barcode"></i> Serial:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="serial" id="serial" required>
                    <span class="input-group-btn">
                        <a id="verificarSerial" class="btn btn-primary"><i class="fas fa-search"></i> Cargar equipo</a>
                        <a href="<?php echo BASE_URL ?>/views/Equipos/agregarEquipoView.php" class="btn btn-primary"><i class="fas fa-desktop"></i> Agregar Equipo</a>
                    </span>
                </div>
            </div>
            <div class="col-md-6">
                <label for="tipo_equipo" class="form-label"><i class="fas fa-desktop"></i> Tipo de Equipo:</label>
                <input type="text" class="form-control" name="tipo_equipo" id="tipo_equipo" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="marca" class="form-label"><i class="fas fa-tag"></i> Marca:</label>
                <input type="text" class="form-control" name="marca" id="marca" required>
            </div>
            <div class="col-md-6">
                <label for="modelo" class="form-label"><i class="fas fa-tag"></i> Modelo:</label>
                <input type="text" class="form-control" name="modelo" id="modelo" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="accesorios" class="form-label"><i class="fas fa-keyboard"></i> Accesorios:</label>
                <textarea class="form-control" name="accesorios" rows="3" id="accesorios"></textarea>
            </div>
            <div class="col-md-6">
                <label for="problema_reportado" class="form-label"><i class="fas fa-exclamation-circle"></i> Problema reportado:</label>
                <textarea class="form-control" name="problema_reportado" rows="3" id="problema_reportado"></textarea>
            </div>
        </div>
        <!-- Fechas -->
        <h4 class="mt-4"><i class="fas fa-calendar text-primary"></i> Fechas</h4>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="fecha_ingreso" class="form-label"><i class="fas fa-calendar-day"></i> Fecha de Ingreso:</label>
                <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso" required value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="col-md-6">
                <label for="fecha_entrega" class="form-label"><i class="fas fa-calendar-day"></i> Fecha de Entrega:</label>
                <input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega" value="<?php echo date('Y-m-d'); ?>" required>
            </div>
        </div>
        <!-- Técnico -->
        <h4 class="mt-4"><i class="fas fa-user-tie text-primary"></i> Técnico</h4>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="tecnico" class="form-label"><i class="fas fa-user-tie"></i> Nombre del Técnico:</label>

                <select class="form-select" name="id_tecnico" id="id_tecnico" required>
                    <option value="">Selecciona:</option>
                    <?php
                    require_once '../../config/db.php';
                    $query = $conn->query("SELECT id, nombres, apellidos FROM personas WHERE rol = 1");
                    while ($valores = mysqli_fetch_array($query)) {
                        echo '<option value="' . $valores['id'] . '">' . $valores['nombres'] . ' ' . $valores['apellidos'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar Orden</button>
        </div>
    </form>
</main>
<?php include '../footer.php'; ?>
