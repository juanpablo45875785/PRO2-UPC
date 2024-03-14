    <?php
    session_start();
    if (empty($_SESSION["email"])) {
        header("Location: login.php");
        exit;
    }
    ?>
    <?php
    include("conexion.php");

    // Verificar que se reciben los datos del formulario y que no están vacíos
    if(isset($_POST['nombre'], $_POST['carnet'], $_POST['email'], $_POST['contrasena'], $_POST['id_rol'])
        && !empty($_POST['nombre']) && !empty($_POST['carnet']) && !empty($_POST['email']) && !empty($_POST['contrasena']) 
        && !empty($_POST['id_rol'])) {
        // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $carnet = $_POST['carnet'];
        $correo = $_POST['email'];
        $contrasena = $_POST['contrasena'];
        $roles = $_POST['id_rol'];

        // Verificar si el correo ya existe en la base de datos
        $verif = "SELECT * FROM user WHERE correo = '$correo' OR carnet = '$carnet'";
        $resultado = mysqli_query($conexion, $verif);

        // Si el correo ya existe, redirigir al formulario de registro con un mensaje de error
        if (mysqli_num_rows($resultado) > 0) {
            header('Location: admin.php?error=correo_existente');
            exit;
        } else {
            // Preparar la consulta para insertar el nuevo usuario
            $sql = "INSERT INTO user (nombre, carnet, correo, contrasena, id_rol) VALUES ('$nombre','$carnet','$correo', '$contrasena', '$roles')";
            $query = mysqli_query($conexion, $sql);

            // Verificar si la inserción fue exitosa
            if ($query) {
                // Redirigir al panel de administración
                header("Location: admin.php");
                exit;
            } else {
                // Si hay un error en la inserción, mostrar un mensaje
                echo "ERROR AL INSERTAR";
            }
        }
    } else {
        // Si no se recibieron los datos del formulario o algún campo está vacío, redirigir al formulario de registro con un mensaje de error
        header("Location: admin.php?error=datos_incompletos");
        exit;
    }
    session_destroy();
    ?>