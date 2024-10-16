<?php
session_start();

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
                            <li class="dropdown-item"> David</li>
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
            <button class="btn btn-info mt-3" onclick="showCart()">Ver carrito</button>

        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">

        <!--    Elaborar un chocolate personalizado    -->
        <!-- Modelos -->
        <div class="col-md-6">
                <h2>Selecciona el modelo para tu chocolate</h2>
                <div class="card-group">
                    <div class="card">
                        <img src="../img/flor.png" class="card-img-top" alt="Modelo 1">
                        <div class="card-body">
                            <h3>Flor $10</h3>
                            <button class="btn btn-primary btn-block mt-2"
                                onclick="selectModel('Modelo Flor', 10)">Seleccionar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../img/globo.png" class="card-img-top" alt="Modelo 2">
                        <div class="card-body">
                            <h3>Globo $15</h3>
                            <button class="btn btn-primary btn-block mt-2"
                                onclick="selectModel('Modelo Globo', 15)">Seleccionar</button>
                        </div>
                    </div>
                    <!-- Agrega más modelos aquí si es necesario -->
                </div>
            </div>
            
        <div class="row">

            <h2><br>Personaliza tu chocolate</h2>
            <div class="col-md-3">
                <h4>Sabor:</h4>
                <select id="sabor" class="form-select mb-3" aria-label="Sabor del pastel"
                    onchange="updateReciboSabor()">
                    <option selected disabled>Selecciona un sabor</option>
                    <option value="fresa" data-price="5">Fresa $5</option>
                    <option value="chocolate" data-price="6">Chocolate $6</option>
                    <option value="vainilla" data-price="4">Vainilla $4</option>
                    <option value="limón" data-price="7">Limón $7</option>
                </select>
            </div>
            <div class="col-md-3">
                <h4>Forma</h4>
                <select id="Forma" class="form-select mb-3" aria-label="Forma del chocolate"
                    onchange="updateReciboSabor()">
                    <option selected disabled>Selecciona una forma</option>
                    <option value="Corazón" data-price="20">Corazón $20</option>
                    <option value="Cuadrada" data-price="15">Cuadrada $15</option>
                    <option value="Redonda" data-price="12">Redonda $12</option>
                    <option value="Estrella" data-price="18">Estrella $18</option>
                </select>
            </div>
            <div class="col-md-3">
                <h4>Tipo de chocolate:</h4>
                <select id="chocolate" class="form-select mb-3" aria-label="Sabor del pastel"
                    onchange="updateReciboSabor()">
                    <option selected disabled>Selecciona el tipo de chocolate</option>
                    <option value="Chocolate negro" data-price="50">Chocolate negro</option>
                    <option value="Chocolate con leche" data-price="42">Chocolate con leche</option>
                    <option value="Chocolate blando" data-price="37">Chocolate blanco</option>
                    <option value="Chocolate amargo" data-price="55">Chocolate amargo</option>
                </select>
            </div>

            <div class="col-md-3">
                <h4>Tamaño:</h4>
                <select id="Tamaño" class="form-select mb-3" aria-label="Sabor del pastel"
                    onchange="updateReciboSabor()">
                    <option selected disabled>Tamaño:</option>
                    <option value="Chico" data-price="20">Chico $20 (250 gr)</option>
                    <option value="Mediano" data-price="35">Mediano $35 (500 gr)</option>
                    <option value="Grande" data-price="65">Grande $65 (1 kg)</option>
                </select>
            </div>
            <div class="col-md-3">
                <h4>Decoración:</h4>
                <select id="Decoración" class="form-select mb-3" aria-label="Sabor del pastel"
                    onchange="updateReciboSabor()">
                    <option selected disabled>Decoración:</option>
                    <option value="Glaseado" data-price="5">Glaseado $5</option>
                    <option value="Chispas" data-price="3">Chispas de colores $3</option>
                </select>
            </div>
            <div class="col-md-3">
                <h4>Envoltura</h4>
                <select id="Envoltura" class="form-select mb-3" aria-label="Sabor del pastel"
                    onchange="updateReciboSabor()">
                    <option selected disabled>Envoltura</option>
                    <option value="aluminio" data-price="4">Papel aluminio $4</option>
                    <option value="celofan" data-price="6">Papel celofan $6</option>
                    <option value="regalo" data-price="10">Caja de regalo $10</option>
                    <option value="dorada" data-price="15">Envoltura dorada $15</option>
                </select>
            </div>
            <div class="col-md-3">
                <h4>Adicional</h4>
                <select id="Adicional" class="form-select mb-3" aria-label="Sabor del pastel"
                    onchange="updateReciboSabor()">
                    <option selected disabled>Selecciona adicionales</option>
                    <option value="Nueces" data-price="5">Nueces $5</option>
                    <option value="Fruta" data-price="10">Fruta seca $10</option>
                    <option value="Caramelo" data-price="8">Caramelo $8</option>
                    <option value="cacahuate" data-price="5">cacahuate $5</option>
                </select>
            </div>
        </div>


        <!-- Modal para el carrito -->
        <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cartModalLabel">Carrito de compras</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul id="cartItems" class="list-group">
                            <!-- Aquí se mostrarán los elementos del carrito -->
                        </ul>
                        <div id="cartTotal" class="mt-3"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="Send()">Proceder al pago</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recibo -->
        <div class="col-md-3">
            <h2>Recibo</h2>
            <ul id="recibo" class="list-group">
                <!-- Los elementos seleccionados se agregarán aquí -->
            </ul>
            <div id="total" class="mt-3">Total: $0</div>
            <button class="btn btn-success mt-3" onclick="addToCart()">Agregar al carrito</button>
        </div>


        <br>
        <br>
        <br><br>
        <br>
        <br><br>
        <br>
        <br>
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../JS/Figuras-2.js"></script>
        <script>

        </script>


        <footer>
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
                         <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseña tu chocolate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/Figuras.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="../principal.php">
                <img src="../img/Logo.PNG" class="Logo" alt="Logo">
            </a>
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
                            <li class="dropdown-item">David</li>
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
            <button class="btn btn-info mt-3" onclick="showCart()">Ver carrito</button>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <div class="row">
            <!-- Modelos de chocolate -->
            <div class="col-md-6">
                <h2>Selecciona el modelo para tu chocolate</h2>
                <div class="card-group">
                    <div class="card">
                        <img src="../img/flor.png" class="card-img-top" alt="Modelo 1">
                        <div class="card-body">
                            <h3 class="card-title">Flor $10</h3>
                            <button class="btn btn-primary btn-block mt-2"
                                onclick="selectModel('Modelo Flor', 10)">Seleccionar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../img/globo.png" class="card-img-top" alt="Modelo 2">
                        <div class="card-body">
                            <h3 class="card-title">Globo $15</h3>
                            <button class="btn btn-primary btn-block mt-2"
                                onclick="selectModel('Modelo Globo', 15)">Seleccionar</button>
                        </div>
                    </div>
                    <!-- Agrega más modelos aquí si es necesario -->
                </div>
            </div>

            <!-- Personalización de chocolate -->
            <div class="col-md-6">
                <h2>Personaliza tu chocolate</h2>
                <div class="row">
                    <!-- Opciones de personalización -->
                    <div class="col-md-6">
                        <!-- Formulario de selección -->
                    </div>
                    <!-- Recibo -->
                    <div class="col-md-6">
                        <!-- Recibo de selección -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para el carrito -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Contenido del modal -->
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/Figuras-2.js"></script>

    <!-- Footer -->
    <footer>
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4>Creadores</h4>
                        <ul>
                            <li>David Gaspar Romero</li>
                            <li>Oscar Armando Escobar Rojas</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Síguenos</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="#"><i class="fab fa-discord fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>
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