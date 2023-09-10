<?php
include __DIR__ . '/../header.php';
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Editar Persona</h2>
    <?php if (isset($error_message)) : ?>
        <div class="alert alert-danger"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <form action="" method="post">
        <?php if ($persona && isset($persona['tipo_id'])) : ?>
            <div class="mb-3">
                <label for="tipo_id" class="form-label">Tipo de Identificación:</label>
                <input type="text" class="form-control" name="tipo_id" value="<?php echo $persona['tipo_id']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="identificacion" class="form-label">Identificación:</label>
                <input type="text" class="form-control" id="identificacion" name="identificacion" value="<?php echo $persona['identificacion']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nombres" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $persona['nombres']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $persona['apellidos']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $persona['direccion']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $persona['telefono']; ?>" required>
            </div>
        <?php endif; ?>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
    </form>
</div>

<?php
include __DIR__ . '/../footer.php'
?>
