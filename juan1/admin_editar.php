<?php

session_start();
if (empty($_SESSION["email"])) {
    header("Location: login.php");
    exit;
}
include("conexion.php");

$id = $_POST["id"];
$nombre = $_POST['nombre'];
$carnet = $_POST['carnet'];
$correo = $_POST['email'];
$contrasena = $_POST['contrasena'];
$roles = $_POST['id_rol'];

$verif = "SELECT carnet, correo FROM user WHERE  carnet = '$carnet' OR correo = '$correo";
$resultado = mysqli_query($conexion, $verif);

// Si el correo ya existe, redirige al formulario de registro
if (mysqli_num_rows($resultado) > 0) {
    header('Location: admin_actualizar.php');
    exit;
} else {

    $sql = "UPDATE user SET id='$id', nombre='$nombre', carnet='$carnet', correo='$correo', contrasena='$contrasena', id_rol='$roles' WHERE id='$id'";
    $query = mysqli_query($conexion, $sql);
    }
    if ($query) {
        Header("Location: admin.php");
    } else {
    }

