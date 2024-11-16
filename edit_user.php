<?php
include('connection.php');
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];

$sql= "UPDATE usuarios SET nombre='$nombre', contraseña='$contraseña' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};


?>