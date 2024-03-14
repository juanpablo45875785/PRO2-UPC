<?php

session_start();
if (empty($_SESSION["email"])) {
    header("Location: login.php");
    exit;
}
include("conexion.php");

$id=$_GET["id"];

$sql="DELETE FROM user WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: admin.php");
}else{

}
session_destroy();
?>