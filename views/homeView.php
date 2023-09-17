<?php include 'header.php'; ?>

<!-- Contenido de la página de inicio -->
<section class="hero bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- Agregamos un icono de Font Awesome y estilizamos el encabezado -->
                <h1 class="display-4"><i class="fas fa-tools"></i> ¡Bienvenido a NANDO_REPARACIONES!</h1>
                <p class="lead">Tu solución confiable para reparaciones y mantenimiento.</p>
                <p class="lead">Explora nuestras opciones y comienza ahora.</p>
                <a href="<?php echo BASE_URL ?>/views/agregarOrdenView.php" class="btn btn-light btn-lg">
                    <i class="fas fa-list-ul"></i> Ver órdenes
                </a>
            </div>
            <div class="col-md-6">
                <img src="../img/welcome-image.png" alt="Imagen de bienvenida" class="img-fluid rounded-circle">
            </div>
        </div>
    </div>
</section>

<!-- Características destacadas -->
<section class="features bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <i class="fas fa-cogs fa-3x text-primary mb-3"></i>
                    <h2>Servicios Profesionales</h2>
                    <p>Somos expertos en reparación y mantenimiento de equipos.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                    <h2>Entrega Rápida</h2>
                    <p>Trabajamos eficientemente para satisfacer tus necesidades.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <i class="fas fa-users fa-3x text-primary mb-3"></i>
                    <h2>Equipo Profesional</h2>
                    <p>Nuestro personal está altamente calificado y comprometido.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
