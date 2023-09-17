<?php include '../views/header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center"><i class="fas fa-tools text-primary"></i> Ordenes de Reparación</h2>

    <div class="form-group">
        <label for="buscarSerial"><i class="fas fa-search text-primary"></i> Buscar por Serial:</label>
        <div class="input-group">
            <input type="text" class="form-control" id="buscarSerial" placeholder="Ingrese el serial">
            <div class="input-group-append">
                <button class="btn btn-primary" id="btnBuscar"><i class="fas fa-search"></i> Buscar</button>
            </div>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col"><i class="fas fa-id-badge text-primary"></i> ID Orden</th>
                    <th scope="col"><i class="fas fa-id-card text-primary"></i> ID Cliente</th>
                    <th scope="col"><i class="fas fa-user text-primary"></i> Nombre Cliente</th>
                    <th scope="col"><i class="fas fa-barcode text-primary"></i> Serial Equipo</th>
                    <th scope="col"><i class="fas fa-laptop text-primary"></i> Equipo</th>
                    <th scope="col"><i class="fas fa-wrench text-primary"></i> Accesorios</th>
                    <th scope="col"><i class="fas fa-comment-alt text-primary"></i> Problema Reportado</th>
                    <th scope="col"><i class="fas fa-calendar-alt text-primary"></i> Fecha de Ingreso</th>
                    <th scope="col"><i class="fas fa-calendar-check text-primary"></i> Fecha de Entrega</th>
                    <th scope="col"><i class="fas fa-user-tie text-primary"></i> Técnico</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php foreach ($reparaciones as $reparacion) { ?>
                    <tr>
                        <td><?php echo $reparacion['id']; ?></td>
                        <td><?php echo $reparacion['Codigo_Cliente']; ?></td>
                        <td><?php echo $reparacion['Nombre_Cliente']; ?></td>
                        <td><?php echo $reparacion['S/N']; ?></td>
                        <td><?php echo $reparacion['Equipo']; ?></td>
                        <td><?php echo $reparacion['Accesorios']; ?></td>
                        <td><?php echo $reparacion['Problema Reportado']; ?></td>
                        <td><?php echo $reparacion['Fecha de Ingreso']; ?></td>
                        <td><?php echo $reparacion['Fecha de Entrega']; ?></td>
                        <td><?php echo $reparacion['Nombre_Tecnico']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include '../views/footer.php'; ?>
