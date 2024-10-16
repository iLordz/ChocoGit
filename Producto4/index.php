<?php
include ("php/Conexion.php");

?>
<!doctype html>
<html lang="es">

<head>
    <title>Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/port.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossOrigin="anonymous" referrerPolicy="no-referrer">
        
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="#"><img src="img/Logo.PNG" class="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <main>
        <section class="registrooo">
            <div class="contenedor">
                <div class="header">
                    <a href="torno.php">
                        <img src="img/logo.png" height="150px" width="300px">
                    </a>
                </div>

                <div class="login">
                    <form action="php/sesion.php" method="post">
                        <input type="email" name="Correo" placeholder="Correo" class="chico" required><br>
                        <input type="password" name="Contraseña" placeholder="Contraseña" class="chico" required><br>
                        <input type="submit" value="Ingresar" name="btn_ingresar">
                    </form>
                    <script>
                        function onSubmit(token) {
                         document.getElementById("demo-form").submit();
                    }
                    //Use `requestSubmit()` for extra features like browser input validation.
                    </script>
                <div class="recaptcha-container" align="center">
                    <div class="g-recaptcha" data-sitekey="6LfOKGgpAAAAAH3QaKmdLedXZ7xmzqLvjy3fMFSx" required></div>  
                </div>
                </div>
       
                <div class="login">
                    <h3>Si no tienes una cuenta da click en el botón de "Registrar"</h3>
                    <form action="registro.php">
                        <input type="submit" value="Registrar" name="btn_enviar">
                    </form>
                </div>

                <div class="login">
                    <br>
                    <h3>¿Olvidaste tu contraseña?</h3>
                    <form action="Recuperacion_Contra.php">
                        <input type="submit" value="Recuperar Contraseña">
                    </form>
                </div>
                           




        </section>
    </main>

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>