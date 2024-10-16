<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="../css/registro.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossOrigin="anonymous" referrerPolicy="no-referrer">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="../principal.php"><img src="../img/Logo.PNG" class="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
      </div>
  </header>
  <main>
    <div class="total">
      <div class="registro">
        <div class="ola">
          <h3>Registro</h3>
        </div>
        <form id="registroForm" action="../php/registro.php" method="post">
    <div class="form-group">
        <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre" required>
    </div>
    <div class="form-group">
        <br>
        <input type="email" name="Correo" id="Correo" class="form-control" placeholder="Correo" required>
    </div>
    <div class="form-group">
        <br>
        <input type="password" name="Contraseña" id="Contraseña" class="form-control" placeholder="Contraseña" required>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" id="mostrarContraseña" class="form-check-input">
        <label class="form-check-label text-white" for="mostrarContraseña">Mostrar contraseña</label>
    </div>
    <div class="form-group">
        <br>
        <input type="password" name="Confi_contraseña" id="Confi_contraseña" class="form-control" placeholder="Confirmar contraseña" required>
    </div>
    <br>
    <select name="Rol" class="form-control" required>
    <option value="1">Administrador</option>
    <option value="2">Usuario Normal</option>
</select>
    <button type="submit" class="btn btn-primary" name="btn_enviar">Registrar</button>
</form>

      </div>
    </div>
  </main>
  <footer>
    <section class="footer">
      <div class="container1">
        <div class="row">
          
          </div>
        </div>
      </div>
    </section>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <script src="../JS/Figuras.js" ></script>
</body>

</html>