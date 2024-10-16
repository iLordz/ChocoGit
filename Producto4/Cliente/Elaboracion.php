<?php

session_start();
include('../php/Conexion.php');


// Consulta para obtener modelos de chocolate
$sqlModelos = "SELECT * FROM modelos_chocolate";
$resultModelos = $conexion->query($sqlModelos);

// Consulta para obtener sabores de chocolate
$sqlSabores = "SELECT * FROM sabores_chocolate";
$resultSabores = $conexion->query($sqlSabores);

// Consulta para obtener tipos de chocolate
$sqlTipos = "SELECT * FROM tipos_chocolate";
$resultTipos = $conexion->query($sqlTipos);

// Consulta para obtener tamaños de chocolate
$sqlTamanios = "SELECT * FROM tamanios_chocolate";
$resultTamanios = $conexion->query($sqlTamanios);

// Consulta para obtener decoraciones de chocolate
$sqlDecoraciones = "SELECT * FROM decoraciones_chocolate";
$resultDecoraciones = $conexion->query($sqlDecoraciones);

// Consulta para obtener envolturas de chocolate
$sqlEnvolturas = "SELECT * FROM envolturas_chocolate";
$resultEnvolturas = $conexion->query($sqlEnvolturas);

// Consulta para obtener adicionales de chocolate
$sqlAdicionales = "SELECT * FROM adicionales_chocolate";
$resultAdicionales = $conexion->query($sqlAdicionales);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseña tu chocolate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Tu archivo de estilo personalizado -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/Figuras.css">
    <style>

        body{

        }
        /* Estilos para el formulario */
        form {
            display: inline-block;
            margin-bottom: 10px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #218838;
  }
</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="../principal.php"><img src="../img/Logo.PNG" class="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Cuenta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../Salir.php">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            
            <a class="navbar-brand" href="Elaboracion.php">Diseños</a>

        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <div class="row">
            <!-- Modelos -->
            <div class="col-md-6">
                <h2>Selecciona el modelo para tu chocolate</h2>
                <div class="card-group">
                    <div class="card">
                        <img src="../img/flor.png" class="card-img-top" alt="Modelo 1">
                        <div class="card-body">
                            <h3>Flor $10</h3>
                            
                        </div>
                    </div>
                    <div class="card">
                        <img src="../img/globo.png" class="card-img-top" alt="Modelo 2">
                        <div class="card-body">
                            <h3>Globo $15</h3>
                            
                        </div>
                    </div>
                    <!-- Agrega más modelos aquí si es necesario -->
                </div>
            </div>
            <form action="../guardar_pedido.php" method="post">
        <label for="modelo">Selecciona un modelo:</label>
        <select id="modelo" name="modelo">
            
            <?php
            if ($resultModelos->num_rows > 0) {
                while ($row = $resultModelos->fetch_assoc()) {
                    echo "<option value='" . $row["nombre"] . "'>" . $row["nombre"] . " $" . $row["precio"] . "</option>";
                }
            }
            ?>
        </select>
        <br><br>
        <!-- Repite este bloque para cada opción de selección -->
        <label for="sabor">Selecciona un sabor:</label>
        <select id="sabor" name="sabor">
            <?php
            if ($resultSabores->num_rows > 0) {
                while ($row = $resultSabores->fetch_assoc()) {
                    echo "<option value='" . $row["nombre"] . "'>" . $row["nombre"] . " $" . $row["precio"] . "</option>";
                }
            }
            ?>
        </select>
        <br><br>

        <label for="tipo_chocolate">Selecciona un tipo:</label>
        <select id="tipo_chocolate" name="tipo_chocolate">
            <?php
            if ($resultTipos->num_rows > 0) {
                while ($row = $resultTipos->fetch_assoc()) {
                    echo "<option value='" . $row["nombre"] . "'>" . $row["nombre"] . " $" . $row["precio"] . "</option>";
                }
            }
            ?>
        </select>
        <br><br>

        <label for="tamaño">Selecciona un tamaño:</label>
        <select id="tamaño" name="tamaño">
            <?php
            if ($resultTamanios->num_rows > 0) {
                while ($row = $resultTamanios->fetch_assoc()) {
                    echo "<option value='" . $row["nombre"] . "'>" . $row["nombre"] . " $" . $row["precio"] . "</option>";
                }
            }
            ?>
        </select>
        <br><br>

        <label for="decoracion">Selecciona una decoracion:</label>
        <select id="decoracion" name="decoracion">
            <?php
            if ($resultDecoraciones->num_rows > 0) {
                while ($row = $resultDecoraciones->fetch_assoc()) {
                    echo "<option value='" . $row["nombre"] . "'>" . $row["nombre"] . " $" . $row["precio"] . "</option>";
                }
            }
            ?>
        </select>
        <br><br>
        <label for="envoltura">Selecciona un envoltura:</label>
        <select id="envoltura" name="envoltura">
            <?php
            if ($resultEnvolturas->num_rows > 0) {
                while ($row = $resultEnvolturas->fetch_assoc()) {
                    echo "<option value='" . $row["nombre"] . "'>" . $row["nombre"] . " $" . $row["precio"] . "</option>";
                }
            }
            ?>
        </select>
        <br><br>

        <label for="adicionales">Selecciona adicionales:</label>
        <select id="adicionales" name="adicionales">
            <?php
            if ($resultAdicionales->num_rows > 0) {
                while ($row = $resultAdicionales->fetch_assoc()) {
                    echo "<option value='" . $row["nombre"] . "'>" . $row["nombre"] . " $" . $row["precio"] . "</option>";
                }
            }
            ?>
        </select>

        <!-- Termina el bloque de repetición -->
       
<form action="#" method="post">
  <input type="submit" value="Enviar Pedido" class="btn">
  <?php
?>
</form>

<a href="carrito.php" class="btn btn-success mt-3">Ver Carrito</a>




            <!-- Scripts -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../JS/Figuras.js"></script>
            <script>

            </script>


            <footer>
                <br> <br><br><br><br>
                <section class="footer">
                    <div class="container1">
                        <div class="row">
                            <div class="footer-col">
                                <h4>Creadores</h4>
                                <li>David Gaspar Romero</li>
                                <li>Oscar Armando Escobar Rojas</li>
                            </div>
                            <div class='footer-col'>
                                <h4>Siguenos</h4>
                                <div class='social-link'>
                                    <a href=''><i class="fa-brands fa-facebook fa-2xl"></i></a>
                                    <a href=''><i class="fa-brands fa-instagram fa-2xl"></i></a>
                                    <a href=''><i class="fa-brands fa-twitter fa-2xl"></i></a>
                                    <a href=''><i class="fa-brands fa-discord fa-2xl"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </footer>
</body>

</html>