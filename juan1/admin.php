<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="iconos/usuario.ico">
    <link rel="icon" href="iconos/usua.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body background="iconos/fondo8.jpg">

    <?php
    session_start();
    if (empty($_SESSION["email"])) {
        header("Location: login.php");
        exit;
    }

    include("conexion.php");

    // Procesar la búsqueda
    if (isset($_GET['buscar']) && !empty($_GET['buscar'])) {
        $buscar = mysqli_real_escape_string($conexion, $_GET['buscar']);
        $sql = "SELECT * FROM user WHERE carnet LIKE '%$buscar%'";
        $query = mysqli_query($conexion, $sql);
    } else {
        // Si no se proporciona un término de búsqueda, mostrar todos los usuarios
        $sql = "SELECT * FROM user";
        $query = mysqli_query($conexion, $sql);
    }
    ?>

    <div class="container">
        <div class="user-form">
            <h1 align="center" style="color: aliceblue ;">CRUD JUAN PABLO</h1>
            <form action="admin_agregar.php" method="POST">
                <h2 style="color: aliceblue ;">Crear Usuario</h2>
                <br>
                <select name="id_rol">
                    <option value="1">1 Administrador</option>
                    <option value="2">2 Lector</option>
                </select>
                <br>
                <input type="nombre" name="nombre" placeholder="nombre"><br>
                <br>
                <input type="carnet" name="carnet" placeholder="carnet"><br>
                <br>
                <input type="correo" name="email" placeholder="email"><br>
                <br>
                <input type="contraseña" name="contrasena" placeholder="Contraseña"><br>
                <br>


                <br>
                <input type="submit" value="Agregar">
            </form>
        </div>

        <div class="buscar-form">
            <h2 style="color: aliceblue ;">Buscar Usuario</h2>
            <form action="" method="GET">
                <input type="text" name="buscar" placeholder="Número de carnet">
                <button type="submit">Buscar</button>
            </form>
        </div>

        <div class="users-table">
            <h1 align="center" style="color: aliceblue ;">Usuarios Registrados</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Carnet</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Rol</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <th><?= $row['id'] ?></th>
                            <th><?= $row['nombre'] ?></th>
                            <th><?= $row['carnet'] ?></th>
                            <th><?= $row['correo'] ?></th>
                            <th><?= $row['contrasena'] ?></th>
                            <th><?= $row['id_rol'] ?></th>
                            <th><a href="admin_actualizar.php?id=<?= $row['id'] ?>" class="user-table--edit">Editar</a></th>
                            <th><a href="admin_eliminar.php?id=<?= $row['id'] ?>" class="user-table--delete">Eliminar</a>
                            </th>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <a href="logout.php" class="btn btn-primary">Cerrar sesión</a>

    </div>

</body>

</html>