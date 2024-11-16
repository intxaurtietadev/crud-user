<?php
include('connection.php');
$con = connection();

$sql ="SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Crud</title>
</head>
<body>
    <div>
        <form action="insert_user.php" method="POST">
            <h1>Crear usuario</h1>

            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="contraseña" placeholder="Contraseña">


            <input type="submit" value="Agregar usuario">
        </form>
    </div>

    <div>
        <h2>Usuarios
        </h2>
        <table>
            <thead>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Contraseña</th>

    <th></th>
    <th></th>
</tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
              <th><?= $row ['id']?></th>
              <th><?= $row ['nombre']?></th>
              <th><?= $row ['contraseña']?></th>

              <th><a href="update.php?id=<?= $row ['id']?>">Editar</a></th>
              <th><a href="delete_user.php?id=<?= $row ['id']?>">Eliminar</a></th>
              </tr>
              <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
</html>