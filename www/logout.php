<?php
session_start();

// Eliminar las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();
header("Location: index.php");
exit();
?>
