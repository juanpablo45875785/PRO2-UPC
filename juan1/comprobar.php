<?php

include("conexion.php");

$email = $_POST['email'];
$password = $_POST['password'];

    session_start();
    $_SESSION['email'] = $email;


    $query = "SELECT * FROM user WHERE correo='$email' AND contrasena='$password'";
    $consulta = mysqli_query($conexion, $query);
    $fila = mysqli_fetch_array($consulta);
    if ($fila['id_rol'] == 1) {
        header('Location: admin.php');
        exit;
    } elseif ($fila['id_rol'] == 2) {
        header('Location: https://www.friv.com/z/play/juegos.html');
        exit;
    } else {
        header('Location: login.php');
        exit;
    }
?>
