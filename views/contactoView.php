<?php include 'header.php'; ?>

<div class="container mt-5">
    <h2>Formulario de Contacto</h2>
    <form id="contact-form" action="../controllers/enviarMensajeController.php" method="POST">
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
        <div id="success-message" class="alert alert-success d-none">¡Mensaje enviado con éxito!</div>
        <div id="error-message" class="alert alert-danger d-none">Hubo un error al enviar el mensaje.</div>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-paper-plane"></i> Enviar
        </button>
    </form>
</div>

<script>
    document.getElementById("contact-form").addEventListener("submit", function (e) {
        e.preventDefault();
        setTimeout(function () {
            document.getElementById("contact-form").reset();
            document.getElementById("success-message").classList.remove("d-none");
        }, 1500);
    });
</script>

<?php include 'footer.php'; ?>
