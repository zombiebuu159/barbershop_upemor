<?php  include 'Static/connect/db.php'; ?>
<?php  include 'includes/header.php'; ?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $delete = "DELETE FROM servicios WHERE id=$id;";
        $execute = mysqli_query($conn, $delete);
        if($execute) {
            header("Location: consulta.php?status=deleted");
        } else {
            header("Location: consulta.php?status=error");
        }
    }
?>
<?php  include 'includes/footer.php'; ?>
