    document.getElementById('registroForm').addEventListener('submit', function(event) {
        var password = document.getElementById('Contraseña').value;
        var regex = /^[a-zA-Z0-9]*$/; 
        if (!regex.test(password)) {
            alert('La contraseña no puede contener caracteres especiales.');
            event.preventDefault();
        }


        if (password.length < 8 || password.length > 12) {
            alert('La contraseña debe tener entre 8 y 12 caracteres.');
            event.preventDefault();
        }
    });

    document.getElementById('mostrarContraseña').addEventListener('change', function() {
      var contraseñaInput = document.getElementById('Contraseña');
      if (this.checked) {
          contraseñaInput.type = 'text';
      } else {
          contraseñaInput.type = 'password';
      }
    });