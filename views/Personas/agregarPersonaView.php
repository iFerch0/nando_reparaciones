<?php include '../header.php'; ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Registrar Persona</h2>
                </div>
                <div class="card-body">
                    <form action="../../controllers/personasController.php" method="POST">
                        <div class="form-group">
                            <label for="tipo_identificacion">Tipo de Identificación</label>
                            <input type="text" class="form-control" id="tipo_identificacion" name="tipo_identificacion" required>
                        </div>
                        <div class="form-group">
                            <label for="identificacion">Identificación</label>
                            <input type="text" class="form-control" id="identificacion" name="identificacion" required>
                        </div>
                        <div class="form-group">
                            <label for="nombres">Nombre</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" required>
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
