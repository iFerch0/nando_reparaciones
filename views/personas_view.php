<?php include 'partials/header.php'; ?>

<table>
    <tr>
        <th>Identificacion</th>
        <th>Nombres</th>
    </tr>
    <?php foreach ($personas as $persona): ?>
        <tr>
            <td><?php echo $persona['identificacion']; ?></td>
            <td><?php echo $persona['nombres'];?></td>
        </tr>
        <?php endforeach; ?>


</table>
<?php include 'partials/footer.php'; ?>
