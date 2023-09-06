<?php include '../header.php'; ?>
<div class="container">
    <h2>Registrar Persona</h2>
    <form action="../../controllers/personasController.php" method="POST">
        <div class="form-group">
            <label for="tipo_identificacion">Tipo Identificación</label>
            <input type="text" class="form-control" id="tipo_identificacion" name="tipo_identificacion" required>
        </div>
        <div class="form-group">
            <label for="identificacion">Identificación</label>
            <input type="text" class="form-control" id="identificacion" name="identificacion" required>
            <button type="button" id="loadDataButton">Cargar Datos</button><br>

        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombres" name="nombres" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</div>
<?php include '../footer.php'; ?>
