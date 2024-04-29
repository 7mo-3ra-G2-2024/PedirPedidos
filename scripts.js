// Función para agregar un producto al carrito
function agregarAlCarrito(nombre, precio) {
    var cantidad = 1; // Por defecto, se agrega una cantidad de 1

    // Creamos un objeto FormData para enviar los datos al servidor PHP
    var formData = new FormData();
    formData.append('producto', nombre);
    formData.append('precio', precio);
    formData.append('cantidad', cantidad);

    // Realizamos una petición POST al servidor para agregar el producto al carrito
    fetch('agregar_al_carrito.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Puedes manejar la respuesta del servidor si lo necesitas
        // Actualizamos el contenido del carrito (si se requiere)
        actualizarContenidoCarrito();
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Función para actualizar el contenido del carrito después de agregar un producto
function actualizarContenidoCarrito() {
    // Aquí puedes escribir el código para actualizar el contenido del carrito (si es necesario)
}

// Función para realizar un pedido
function realizarPedido() {
    // Realizamos una petición POST al servidor para realizar el pedido
    fetch('realizar_pedido.php', {
        method: 'POST'
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Puedes manejar la respuesta del servidor si lo necesitas
        // Actualizamos el contenido del carrito (si se requiere)
        actualizarContenidoCarrito();
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
