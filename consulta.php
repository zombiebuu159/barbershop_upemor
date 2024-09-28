<?php  include 'Static/connect/db.php'; ?>
<?php  include 'includes/header.php'; ?>

<?php if (isset($_GET['status']) && $_GET['status'] == 'deleted'): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>¡Eliminado!</strong> El servicio ha sido eliminado correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>¡Error!</strong> Hubo un problema al eliminar el servicio.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<table class="table table-success table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Servicio</th>
            <th>Costo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM servicios";
        $exec = mysqli_query($conn, $sql);
        while($rows = mysqli_fetch_array($exec)){
        ?>
            <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['nombre']; ?></td>
                <td><?php echo $rows['costo']; ?></td>
                <td><a href="eliminar.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger">Eliminar</a></td>
                <td><a href="actualizar.php?id=<?php echo $rows['id']; ?>" class="btn btn-primary">Actualizar</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="admin.php"><img src="Static/img/back.png" alt="regresar imagen"></a>

<?php  include 'includes/footer.php'; ?>
