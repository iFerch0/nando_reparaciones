<?php
    include '../views/header.php'
?>

<div class="class container mt-5">
    <h2 class="text-center">Ordenes de Reparación</h2>

    

    <div class="div form-group">
        <label for="buscarSerial">Buscar por Serial</label>
        <div class="input-group">
            <input type="text" class="form-control" id="buscarSerial" placeholder="Ingrese serial">
            <button class="btn btn-primary" id="btnBuscar">Buscar equipo</button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID Orden</th>
                    <th scope="col">ID Cliente</th>
                    <th scope="col">Nombre Cliente</th>
                    <th scope="col">Serial Equipo</th>
                    <th scope="col">Equipo</th>
                    <th scope="col">Accesorios</th>
                    <th scope="col">Problema Reportado</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Fecha de Entrega</th>
                    <th scope="col">Tecnico</th>
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
             <div class="table-responsive">

             </div>
<?php
    include '../views/footer.php'
?>
