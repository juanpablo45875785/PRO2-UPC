    <?php

    session_start();


    if (empty($_SESSION["email"])) {
        header("Location: login.php");
        exit; 
    }

    include("conexion.php");

    // Obtiene el ID del usuario a editar desde la URL
    $id = $_GET['id'];

    // Realiza la consulta para obtener la información del usuario a editar
    $sql = "SELECT * FROM user WHERE id='$id'";
    $query = mysqli_query($conexion, $sql);

    // Obtiene los datos del usuario a editar
    $row = mysqli_fetch_array($query);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo_editar.css">

        <title>Editar usuarios</title>
    </head>

    <body background="iconos/fondo8.jpg">
        <div class="user-form">
            <h1 align="center">Editar Usuario</h1>
            <form align="center"action="admin_editar.php" method="POST">
                
            
                <input type="hidden" name="id" value="<?= $row['id'] ?>">           
                <label for="email">nombre:</label><br>
                <input type="text" name="nombre" placeholder="nombre" value="<?= $row['nombre'] ?>">
                <br><label for="nombre">carnet:</label><br>
                <input type="text" name="carnet" placeholder="carnet" value="<?= $row['carnet'] ?>"><br>
                <label for="email">correo:</label><br>
                <input type="text" name="email" placeholder="Email" value="<?= $row['correo'] ?>"><br>
                <label for="contrasena">Contraseña:</label><br>
                <input type="text" name="contrasena" placeholder="Contraseña" value="<?= $row['contrasena'] ?>"><br>
                <label for="id_rol">Rol:</label><br>
                <select name="id_rol">
                    <option value="1" <?= ($row['id_rol'] == 1) ? 'selected' : '' ?>>Rol 1 Administrador</option>
                    <option value="2" <?= ($row['id_rol'] == 2) ? 'selected' : '' ?>>Rol 2 Lector</option>
                </select>

                <input type="submit" class="btn btn-primary" value="Actualizar"><br>
                <a href="admin.php" class="btn btn-primary">Salir</a>

            </form>
        </div>
    </body>

    </html>


