<?php

include('connection.php');
$con = connection();

$id=$_GET['id'];


$sql = "SELECT * FROM usuarios WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <form action="edit_user.php" method="POST">
            <h1>Editar usuario</h1>

            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?>">
            <input type="text" name="contraseña" placeholder="Contraseña" value="<?= $row['contraseña'] ?>">

            <input type="submit" value="Actualizar información">
        </form>
    </div>
</body>
</html>