<?php
session_start();
// Verificar si el usuario ha iniciado sesión
//$Nombre = $_SESSION['Nombre'];
//$Id = $_SESSION['Contraseña'];
//echo "Bienvenido, " . $Nombre . " con el id " . $Id;

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Enlaces a los estilos CSS de Bootstrap y otras bibliotecas -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- Tu archivo de estilo personalizado -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/Figuras.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="principal.php"><img src="img/Logo.PNG" class="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <a class="nav-link  text-dark" role="button"  href="principal.php">Home</a>
        <ul class="navbar-nav ms-auto">        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Cuenta
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Cliente/Perfil.php" >Mi Perfil</a> </li>
              <li><a class="dropdown-item" href="Salir.php">Cerrar Sesion</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="contenedor-1">
    <div class="container">
      <div class="titulo text-center mb-4">
        <h3>Nuestros mejores diseños</h3>
      </div>
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/Promocion1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/Promocion2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Promocion3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="container-fluid navbar-light bg-light">
        <h3 class="text-center mt-4">Crea tu propio diseño</h3>
      </div>         
      <div class="botones d-flex justify-content-center mt-4">        
        <a href="Cliente/Elaboracion.php" class="btn btn-primary btn-lg me-2">Crear</a>
      </div>
    </div>
  </section>

  <div style="text-align: center; padding: 20px; background-color: #f8d7da; border: 1px solid #f5c6cb; border-radius: 5px;">
        <p style="margin: 10px 0; font-size: 20px; color: #343a40;">¡OFERTA! No te lo puedes perder</p>
        <p style="margin: 10px 0; font-size: 20px; color: #343a40;">20 % de Descuento</p>
    </div>

    <div class="container">
      <div class="titulo text-center mb-4">
        <h3>Recomendaciones</h3>
      </div>
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="100">
            <img src="img/Promocion1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/Promocion2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Promocion3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

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

  <!-- Agrega tu sección y contenido adicional aquí -->

  <!-- Scripts de Bootstrap y otras bibliotecas -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>