<?php include 'header.php'; ?>
<div class="container mt-5">
    <h2>Formulario de Contacto</h2>
    <?php
// Verifica si hay un mensaje en la URL
if (isset($_GET['message'])) {
    $message = $_GET['message'];
    echo '<div class="alert alert-success mt-3"><i class="fas fa-check-circle"></i> ' 
            . htmlspecialchars($message) . '
        </div>';
}
?>

    <form id="contact-form" action="<?php echo BASE_URL; ?>controllers/enviarMensajeController.php" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-comment"></i></span>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-paper-plane"></i> Enviar
        </button>
        <div id="mensaje-exito" class="alert alert-success mt-3" style="display: none;">
    <i class="fas fa-check-circle"></i> Mensaje enviado correctamente.
</div>
    </form>
</div>
<script>
    form.addEventListener('submit', function (e) {
    e.preventDefault(); // Evita el envío del formulario predeterminado

    // Aquí muestra el mensaje de éxito
    mensajeExito.style.display = 'block';

    // Crea un objeto FormData para recopilar los datos del formulario
    var formData = new FormData(form);

    // Envía los datos del formulario al servidor usando AJAX
    $.ajax({
        url: form.getAttribute('action'),
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            // Aquí puedes manejar la respuesta del servidor si es necesario
            console.log(response);
        },
        error: function(error) {
            // Maneja los errores de la solicitud AJAX si es necesario
            console.error(error);
        }
    });

    // Limpia el formulario si es necesario
    form.reset();
});
</script>
<?php include 'footer.php'; ?>
