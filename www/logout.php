<?php
session_start();

// Eliminar las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();
$_SESSION = array();
header("Location: index.php");
exit();
?>
