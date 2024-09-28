<?php  include 'Static/connect/db.php'?>
<?php  include 'includes/header.php'?>

<?php

$servicio = $_POST['nombre'];
$precio = $_POST['precio'];

$sql = "INSERT INTO servicios(nombre, costo) VALUES('$servicio',$precio);";

$execute = mysqli_query($conn,$sql);
sleep(3);
header("Location: consulta.php");
?>
<?php  include 'includes/footer.php'?>