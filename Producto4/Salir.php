

<?php
session_start();
session_unset();
session_destroy();
echo "Sesión cerrada"; // Agrega un mensaje de depuración
header("Location: index.php"); // Redirige al usuario a la página principal después de cerrar sesión
exit();
?>

