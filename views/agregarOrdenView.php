<?php include 'header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center">Agregar Orden de Reparación</h2>
    <form action="procesar_orden.php" method="post">
        <!-- Datos del Cliente -->
        <h4>Datos del Cliente</h4>
        <div class="form-group">
            <label for="tipo_identificacion">Tipo de Identificación:</label>
            <select class="form-control" name="tipo_identificacion" required>
                <option value="">Selecciona:</option>
                <?php
                require_once("../config/db.php");
                $query = $conn->query("SELECT * FROM tipo_identificacion");
                while ($valores = mysqli_fetch_array($query)) {
                    echo '<option value="' . $valores['id'] . '">' . $valores['descripcion'] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="numero_identificacion">Número de Identificación:</label>
            <input type="text" class="form-control" name="numero_identificacion" required>
            <button id="buscar" class="btn btn-primary">Buscar</button>
        </div>
        <div class="form-group">
            <label for="nombres">Nombres:</label>
            <input type="text" class="form-control" name="nombres" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" name="apellidos" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" name="direccion" required>
        </div>
        <div class="form-group">
            <label for="telefono">Número de Teléfono:</label>
            <input type="tel" class="form-control" name="telefono" required>
        </div>

        <!-- Datos del Equipo de Computo -->
        <h4>Datos del Equipo de Computo</h4>
        <div class="form-group">
            <label for="tipo_equipo">Tipo de Equipo:</label>
            <select class="form-control" name="tipo_equipo" required>
                <option value="">Selecciona:</option>
                <?php
                $query = $conn->query("SELECT * FROM tipo_equipo");
                while ($valores = mysqli_fetch_array($query)) {
                    echo '<option value="' . $valores['id'] . '">' . $valores['descripcion'] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" name="marca" required>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" class="form-control" name="modelo" required>
        </div>
        <div class="form-group">
            <label for="serial">Serial:</label>
            <input type="text" class="form-control" name="serial" required>
        </div>
        <div class="form-group">
            <label for="accesorios">Accesorios:</label>
            <textarea class="form-control" name="accesorios" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="tipo_dano">Tipo de Daño:</label>
            <input type="text" class="form-control" name="tipo_dano" required>
        </div>
        <div class="form-group">
            <label for="observaciones">Observaciones de Técnico Anterior:</label>
            <textarea class="form-control" name="observaciones" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="fecha_ingreso">Fecha de Ingreso:</label>
            <input type="date" class="form-control" name="fecha_ingreso" required>
        </div>
        <div class="form-group">
            <label for="fecha_entrega">Fecha de Entrega:</label>
            <input type="date" class="form-control" name="fecha_entrega" required>
        </div>

        <!-- Nombre del Técnico -->
        <div class="form-group">
            <label for="tecnico">Nombre del Técnico:</label>
            <input type="text" class="form-control" name="tecnico" required>
        </div>

        <!-- Botón para enviar el formulario -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Orden</button>
        </div>
    </form>
</div>

    <?php include 'footer.php'; ?>
