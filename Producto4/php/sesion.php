<?php
session_start();
include("Conexion.php");

$correo = $_POST['Correo'];
$contraseña = $_POST['Contraseña'];

$stmt = $conexion->prepare("SELECT id, Nombre, Contraseña, Rol FROM registro WHERE Correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$stmt->bind_result($id, $Nombre, $hashed_password, $tipo_usuario);
$stmt->fetch();
$stmt->close();

if ($hashed_password !== null && password_verify($contraseña, $hashed_password)) {
    // Guarda los datos del usuario en la sesión
    $_SESSION['id'] = $id;
    $_SESSION['Rol'] = $tipo_usuario;
    $_SESSION['Nombre'] = $Nombre;
    $_SESSION['Correo'] = $correo;
    
    // Redirige dependiendo del tipo de usuario
    switch ($tipo_usuario) {
        case 1:
            header('Location: ../Admin/Admin.php');
            break;
        case 2:
            header('Location: ../principal.php');
            break;
        case 3:
            header('Location: ingreso3.php');
            break;
        default:
            header('Location: index.html');
    }
} else {
    header('Location: login.html?error=1'); // Redirige de nuevo al formulario de inicio de sesión con un mensaje de error
}
?>
