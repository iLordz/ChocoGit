<?php
include('../php/Conexion.php');

// Verificar si se reciben los datos del carrito correctamente
if(isset($_POST['jsonData'])) { // Cambiar 'cartItems' por 'jsonData'
    // Decodificar los datos JSON recibidos
    $cartItems = json_decode($_POST['jsonData'], true);

    // Iterar sobre los elementos del carrito y guardarlos en la base de datos
    foreach ($cartItems as $item) {
        $name = $conexion->real_escape_string($item['name']);
        $price = $item['price'];

        // Construir y ejecutar la consulta SQL para insertar los elementos del carrito en la base de datos
        $sql = "INSERT INTO carrito (name, price) VALUES ('$name', $price)";
        if ($conexion->query($sql) === TRUE) {
            // Si se guardan correctamente los datos, enviar un mensaje de éxito
            echo "Datos del carrito guardados correctamente.";
        } else {
            // En caso de error, enviar un mensaje de error con la descripción del problema
            echo "Error al insertar los datos del carrito en la base de datos: " . $conexion->error;
        }
    }
} else {
    // Si no se reciben datos del carrito, enviar un mensaje de error
    echo "No se recibieron datos del carrito.";
}
?>
