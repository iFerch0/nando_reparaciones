<?php
include __DIR__ . '/../header.php';
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Editar Equipo</h2>
                    <?php if (isset($error_message)) : ?>
        <div class="alert alert-danger"><?php echo $error_message; ?></div>
    <?php endif; ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <?php if ($equipo && isset($equipo['id'])) : ?>
                        <div class="form-group">
                            <label for="tipo_equipo">Tipo de Equipo</label>
                            <input type="text" class="form-control" name="tipo_equipo" value="<?php echo $equipo['tipo_equipo']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="marca">Marca</label>
                            <input type="text" class="form-control" name="marca" value="<?php echo $equipo['marca']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="modelo">Modelo</label>
                            <input type="text" class="form-control" name="modelo" value="<?php echo $equipo['modelo']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="serial">Serial</label>
                            <input type="text" class="form-control" name="serial" value="<?php echo $equipo['serial']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="fecha_compra">Fecha de Compra</label>
                            <input type="text" class="form-control" name="fecha_compra" value="<?php echo $equipo['fecha_compra']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="persona_id">ID Persona</label>
                            <input type="text" class="form-control" name="persona_id" value="<?php echo $equipo['persona_id']; ?>">
                        </div>
                        <!-- Aquí puedes agregar un área para mostrar mensajes de error -->
                        <?php endif; ?>

                        <div class="text-center">
                            <!-- Agrega un atributo "name" al botón -->
                            <button type="submit" class="btn btn-primary" name="guardar_cambios">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include __DIR__ . '/../footer.php';
?>
