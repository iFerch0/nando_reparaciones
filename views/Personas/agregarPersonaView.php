<?php include '../header.php'; ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center"><i class="fas fa-user-plus text-primary"></i> Registrar Persona</h2>
                </div>
                <div class="card-body">
                    <form action="../../controllers/personasController.php" method="POST">
                        <div class="form-group">
                            <label for="tipo_identificacion"><i class="fas fa-id-card text-primary"></i> Tipo de Identificación</label>
                            <input type="text" class="form-control" id="tipo_identificacion" name="tipo_identificacion" required>
                        </div>
                        <div class="form-group">
                            <label for="identificacion"><i class="fas fa-address-card text-primary"></i> Identificación</label>
                            <input type="text" class="form-control" id="identificacion" name="identificacion" required>
                        </div>
                        <div class="form-group">
                            <label for="nombres"><i class="fas fa-user text-primary"></i> Nombre</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" required>
                        </div>
                        <div class="form-group">
                            <label for="apellidos"><i class="fas fa-user text-primary"></i> Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono"><i class="fas fa-phone text-primary"></i> Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="direccion"><i class="fas fa-map-marker-alt text-primary"></i> Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
