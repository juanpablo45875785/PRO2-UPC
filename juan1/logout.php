<?php
// Inicia la sesión si aún no se ha iniciado
session_start();

// Elimina todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirecciona al usuario a la página de inicio de sesión u otra página
header("Location: login.php");
exit;
?>
