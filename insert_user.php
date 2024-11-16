<?php
include('connection.php');
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];


$sql= "INSERT INTO usuarios VALUES('$id','$nombre','$contraseña')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};

?>