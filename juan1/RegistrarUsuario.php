<?php
include("conexion.php");

// Verificar si se han enviado los datos del formulario y si no están vacíos
if(isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    // Recibir los datos del formulario y escapar caracteres especiales para prevenir inyección SQL
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $carnet = mysqli_real_escape_string($conexion, $_POST['carnet']);
    $correo = mysqli_real_escape_string($conexion, $_POST['email']);
    $contrasena = mysqli_real_escape_string($conexion, $_POST['password']);
    $id_rol = 2;
    
    
    // Verificar si el correo ya está registrado en la base de datos
    $verif = "SELECT correo , carnet FROM user WHERE correo = '$correo' or carnet='$carnet'";
    $resultado = mysqli_query($conexion, $verif);
    
    // Si el correo ya existe, redirige al formulario de registro
    if(mysqli_num_rows($resultado) > 0) {
        header('Location: Registrar.php');
        exit;
    }
    
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO user (nombre, carnet, correo, contrasena,id_rol) VALUES ('$nombre','$carnet','$correo', '$contrasena', '$id_rol')";
    
    // Redirigir según el resultado de la inserción
    if(mysqli_query($conexion, $sql)) {
        header('Location: accesocorrecto.php');
        exit;
    } else {
        header('Location: Registrar.php');
        exit;
    }
} else {
    // Si no se enviaron los datos del formulario o están vacíos, redirige al formulario de registro
    header('Location: Registrar.php');
    exit;
}

?>
