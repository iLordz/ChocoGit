var cartItems = []; // Array para almacenar los elementos del carrito


function selectModel(modelName, price) {
    console.log("Model selected:", modelName, price);
    cartItems.push({ name: modelName, price: price }); // Agregar el modelo al carrito
    console.log("Cart items:", cartItems);
    updateRecibo(); // Actualizar el recibo en la página
    }
    

function updateReciboSabor() {
    cartItems = []; // Vaciar el array cartItems
  

    var saborSeleccionado = document.getElementById('sabor').value;
    var precioSabor = document.getElementById('sabor').selectedOptions[0].dataset.price;
    console.log("Sabor selected:", saborSeleccionado, precioSabor);
    if (precioSabor !== undefined) { // Verificar si el precio está definido
        cartItems.push({ name: "Sabor: " + saborSeleccionado, price: parseInt(precioSabor) }); // Agregar el sabor al carrito
    }

    var formaSeleccionada = document.getElementById('Forma').value;
    var precioForma = document.getElementById('Forma').selectedOptions[0].dataset.price;
    console.log("Forma selected:", formaSeleccionada, precioForma);
    if (precioForma !== undefined) { // Verificar si el precio está definido
        cartItems.push({ name: "Forma: " + formaSeleccionada, price: parseInt(precioForma) }); // Agregar la forma al carrito
    }


    var chocolateSeleccionado = document.getElementById('chocolate').value;
    var precioChocolate = document.getElementById('chocolate').selectedOptions[0].dataset.price;
    console.log("Chocolate selected:", chocolateSeleccionado, precioChocolate);
    if (precioChocolate !== undefined) { // Verificar si el precio está definido
        cartItems.push({ name: "Tipo: " + chocolateSeleccionado, price: parseInt(precioChocolate) }); // Agregar el tipo de chocolate al carrito
    }

    var tamañoSeleccionado = document.getElementById('Tamaño').value;
    var precioTamaño = document.getElementById('Tamaño').selectedOptions[0].dataset.price;
    console.log("Tamaño selected:", tamañoSeleccionado, precioTamaño);
    if (precioTamaño !== undefined) { // Verificar si el precio está definido
        cartItems.push({ name: "Tamaño: " + tamañoSeleccionado, price: parseInt(precioTamaño) }); // Agregar el tamaño al carrito
    }


    var decoraciónSeleccionada = document.getElementById('Decoración').value;
    var precioDecoración = document.getElementById('Decoración').selectedOptions[0].dataset.price;
    console.log("Decoración selected:", decoraciónSeleccionada, precioDecoración);
    if (precioDecoración !== undefined) { // Verificar si el precio está definido
        cartItems.push({ name: "Decoración: " + decoraciónSeleccionada, price: parseInt(precioDecoración) }); // Agregar la decoración al carrito
    }


    var envolturaSeleccionada = document.getElementById('Envoltura').value;
    var precioEnvoltura = document.getElementById('Envoltura').selectedOptions[0].dataset.price;
    console.log("Envoltura selected:", envolturaSeleccionada, precioEnvoltura);
    if (precioEnvoltura !== undefined) { // Verificar si el precio está definido
        cartItems.push({ name: "Envoltura: " + envolturaSeleccionada, price: parseInt(precioEnvoltura) }); // Agregar la envoltura al carrito
    }


    var adicionalSeleccionado = document.getElementById('Adicional').value;
    var precioAdicional = document.getElementById('Adicional').selectedOptions[0].dataset.price;
    console.log("Adicional selected:", adicionalSeleccionado, precioAdicional);
    if (precioAdicional !== undefined) { // Verificar si el precio está definido
        cartItems.push({ name: "Adicional: " + adicionalSeleccionado, price: parseInt(precioAdicional) }); // Agregar el adicional al carrito
    }

    
    console.log("Cart items:", cartItems);
    updateRecibo(); // Actualizar el recibo en la página
}



function addToCart() {
  // No necesitamos hacer nada aquí, ya que los elementos se agregan directamente al hacer clic en los botones "Seleccionar"
  
}

function showCart() {
  var modal = new bootstrap.Modal(document.getElementById('cartModal'));
  modal.show();
}

function order() {
  // No necesitamos hacer nada aquí ya que los elementos están en el carrito
}

function removeFromCart(index) {
  cartItems.splice(index, 1); // Eliminar el elemento del carrito
  updateRecibo(); // Actualizar el recibo en la página
}
function updateRecibo() {
    var recibo = document.getElementById('recibo');
    var cartItemsList = document.getElementById('cartItems');
    var total = 0;

    recibo.innerHTML = ''; // Limpiar el recibo principal antes de actualizarlo
    cartItemsList.innerHTML = ''; // Limpiar la lista del carrito antes de actualizarla

    cartItems.forEach(function(item, index) {
        recibo.innerHTML += `
            <li class="list-group-item">
                <alt="${item.name}"> 
                ${item.name} - $${item.price} 
            </li>
        `;
        cartItemsList.innerHTML += `
            <li class="list-group-item">${item.name} - $${item.price} <button class="btn btn-danger btn-sm" onclick="removeFromCart(${index})">Eliminar</button></li>
        `;
        total += item.price;
    });

    var totalElement = document.getElementById('total');
    totalElement.innerText = `Total: $${total.toFixed(2)}`;

    var cartTotalElement = document.getElementById('cartTotal');
    cartTotalElement.innerText = `Total: $${total.toFixed(2)}`;
}

  /////

 

    