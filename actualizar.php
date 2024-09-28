<?php  include 'Static/connect/db.php'?>

<?php

if(isset($_GET['id'])){
    $ID = $_GET['id'];
    $sql = "SELECT * FROM servicios WHERE id = $ID;";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $precio = $row['costo'];
        //echo $nombre . " | " . $precio;
    }
}
if(isset($_POST['actualizar'])){
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    $sql = "UPDATE servicios SET nombre='$nombre', costo='$precio' WHERE id=$id;";
    mysqli_query($conn, $sql);
    header("Location: consulta.php");

}
?>
<?php  include 'includes/header.php'?>

<form action="actualizar.php?id=<?php echo $_GET['id']?>" method="POST">
    <div class="form_container">
        <label class="formulario_label">Nombre del servicio:
            <input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>"
            class="formulario_input">
        </label>
    </div>
    <br>
    <div class="form_container"> 
        <label class="formulario_label">Precio:
            <br> 
            <input type="text" name="precio" id="precio" value="<?php echo $precio;?>"
            class="formulario_input">
        </label>
    </div>
    <br><br>
    <button name="actualizar" class="formulario_btn">Actualizar</button>
    <br>
    <a href="consulta.php"><img src="Static/img/back.png" alt="regresar imagen"></a>

</form>

<?php  include 'includes/footer.php'?>