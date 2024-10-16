<?php
session_start();
include("../php/Conexion.php");

// Verificar si el usuario está logueado y tiene el rol de administrador (1)
if(isset($_SESSION['Rol']) && $_SESSION['Rol'] == 1) {
    // El usuario tiene el rol de administrador, permitir el acceso a la página
    // Aquí va el contenido de la página
} else {
    // El usuario no tiene el rol adecuado o no ha iniciado sesión, redirigir a otra página
    echo "<script>alert('No puedes acceder no eres administrador'); window.location='../Principal.php';</script>";    exit();
}



?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- Tu archivo de estilo personalizado -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/Figuras.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="principal.html"><img src="../img/Logo.PNG" class="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <nav
        class="nav justify-content-center  "
      >
      <a class="nav-link  text-dark" role="button"  href="#">Home</a>

        <a class="nav-link text-dark" href="Registro.php" aria-current="page"
          >Registro</a
        >
        <a class="nav-link disabled" href="#">Disabled link</a>
      </nav>
      
        <ul class="navbar-nav ms-auto">      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Cuenta
            </a>
            <ul class="dropdown-menu">
              <li class="dropdown-item">Oscar</li>
              <li><a class="dropdown-item" href="../Salir.php">Cerrar Sesion</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php
// Función para mostrar usuarios en una tabla HTML con formato Bootstrap
function mostrarUsuarios($conexion)
{
    // Consulta SQL para obtener los usuarios
    $sql = "SELECT Rol, Nombre, Correo FROM registro";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="table-responsive">';
        echo '<style>
                    body {
                        background-color: black;
                        color: white;
                    }
                </style>';
        echo '<table class="table table-striped table-bordered">';
        echo '<thead class="thead-dark">
                <tr>
                    <th>Rol</th>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
            </thead>';
        echo '<tbody>';
        // Salida de datos de cada fila
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["Rol"] . "</td>
                    <td>" . $row["Nombre"] . "</td>
                    <td>" . $row["Correo"] . "</td>
                </tr>";
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo "0 resultados";
    }
}

// Llamar a la función para mostrar usuarios
mostrarUsuarios($conexion);
?>
