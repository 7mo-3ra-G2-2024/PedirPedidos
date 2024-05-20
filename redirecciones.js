// Manejo de eventos para los botones de inicio de sesión
document.getElementById("loginCliente").addEventListener("click", function() {
    // Redirigir a la página de inicio de sesión del cliente
    window.location.href = "index_cliente.php";
});

document.getElementById("loginAdmin").addEventListener("click", function() {
    // Redirigir a la página de inicio de sesión del administrador
    window.location.href = "index_admin.php";
});
