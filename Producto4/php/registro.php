<?php
session_start(); // Iniciar la sesión si aún no se ha iniciado
include("Conexion.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $contraseña = $_POST['Contraseña'];
    $confi_contraseña = $_POST['Confi_contraseña'];
    $rol = $_POST['Rol'];

    // Validación de datos (puedes agregar tus propias reglas de validación)
    if (empty($Nombre) || empty($Correo) || empty($contraseña) || empty($confi_contraseña) || empty($rol)) {
        echo "Por favor, complete todos los campos del formulario.";
        exit;
    }
    

    // Verificar si las contraseñas coinciden
    if ($contraseña !== $confi_contraseña) {
        echo "<script>alert('Las contraseñas no coinciden');</script>";
        echo "<script>window.location.href = '../registro.php';</script>";
        exit;
    }

    // Hashear la contraseña antes de guardarla en la base de datos
    $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

    // Insertar los datos en la base de datos utilizando una sentencia preparada
    $insertar = "INSERT INTO registro (Nombre, Correo, Contraseña, Rol) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conexion, $insertar);
    mysqli_stmt_bind_param($stmt, "sssi", $Nombre, $Correo, $contraseña, $rol); 

    if (mysqli_stmt_execute($stmt)) {
        // Registro exitoso, redirigir a la página de registro
        $_SESSION['registro_exitoso'] = true;
        echo "<script>alert('Registro exitoso'); window.location='../index.php';</script>";
        exit;
    } else {
        // Error en la inserción
        echo "<script>alert('Error'); window.location='index.html';</script>";
        echo "Error al insertar los datos: " . mysqli_error($conexion);
    }
}



    

?>
    