<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "choco";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$modelo = $_POST['modelo'] ?? '';
$sabor = $_POST['sabor'] ?? '';
// Repite este bloque para cada campo del formulario
$tipo_chocolate = $_POST['tipo_chocolate'] ?? '';
$tamaño = $_POST['tamaño'] ?? '';
$decoracion = $_POST['decoracion'] ?? '';
$envoltura = $_POST['envoltura'] ?? '';
$adicionales = $_POST['adicionales'] ?? '';

// Consulta SQL para insertar el pedido en la base de datos
$sql = "INSERT INTO pedidos (modelo,sabor,tipo_chocolate,tamaño,decoracion,envoltura,adicionales) VALUES ('$modelo', '$sabor', '$tipo_chocolate', '$tamaño', '$decoracion', '$envoltura', '$adicionales')";

if ($conn->query($sql) === TRUE) {
    echo "Pedido guardado correctamente";
    header("Location: Cliente/Elaboracion.php");
} else {
    echo "Error al guardar el pedido: " . $conn->error;
}

// Cerrar conexión a la base de datos
$conn->close();
?>
