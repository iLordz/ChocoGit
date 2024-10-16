<?php
session_start();

// Verificar si hay una sesión de usuario activa
if (!isset($_SESSION['usuario'])) {

}

// Verificar si se han recibido datos del formulario de Elaboracion.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí puedes procesar los datos enviados desde Elaboracion.php y guardarlos en la base de datos
    // Por ejemplo, puedes almacenar los datos en una tabla de "carrito" en la base de datos
    // Puedes usar $_POST para acceder a los datos enviados desde Elaboracion.php
}

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

// Consulta para obtener los productos almacenados en el carrito (puedes adaptarla según la estructura de tu base de datos)
$sql = "SELECT * FROM pedidos";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Carrito de Compras</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Sabor</th>
                    <th scope="col">Tipo de Chocolate</th>
                    <th scope="col">Tamaño</th>
                    <th scope="col">Decoración</th>
                    <th scope="col">Envoltura</th>
                    <th scope="col">Adicionales</th>
                    <th scope="col">fecha_pedido</th>
                </tr>
            </thead>
            <tbody>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th scope='row'>" . $row["id"] . "</th>";
            // Verificar si el campo está definido antes de imprimirlo
            echo "<td>" . (isset($row["modelo"]) ? $row["modelo"] : "") . "</td>";
            echo "<td>" . (isset($row["sabor"]) ? $row["sabor"] : "") . "</td>";
            echo "<td>" . (isset($row["tipo_chocolate"]) ? $row["tipo_chocolate"] : "") . "</td>";
            echo "<td>" . (isset($row["tamaño"]) ? $row["tamaño"] : "") . "</td>";
            echo "<td>" . (isset($row["decoracion"]) ? $row["decoracion"] : "") . "</td>";
            echo "<td>" . (isset($row["envoltura"]) ? $row["envoltura"] : "") . "</td>";
            echo "<td>" . (isset($row["adicionales"]) ? $row["adicionales"] : "") . "</td>";
            echo "<td>" . (isset($row["fecha_pedido"]) ? $row["fecha_pedido"] : "") . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No hay productos en el carrito.</td></tr>";
    }
    ?>
</tbody>
        </table>
    </div>
</body>

</html>

