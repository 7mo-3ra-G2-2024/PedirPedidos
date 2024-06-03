<?php
// Verificar si se han enviado datos de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el usuario y la contraseña son correctos (aquí podrías tener tu propia lógica de verificación de credenciales)
    $usuario_stock = "asd"; // Cambia esto por el usuario válido
    $contraseña_stock = "asd"; // Cambia esto por la contraseña válida
    
    $usuario_stock = $_POST['user'];
    $contraseña_stock = $_POST['password'];
    
    if ($usuario_ingresado === $usuario_valido && $contraseña_ingresada === $contraseña_valida) {
        // Redireccionar al usuario a la página de dashboard.php
        header("Location: ../sucursales/crudsucursal.php");
        exit; // Es importante terminar la ejecución del script después de redirigir
    } else {
        // Si las credenciales son incorrectas, puedes mostrar un mensaje de error o redirigir nuevamente al formulario de inicio de sesión
        header("Location: login.php"); // Redirigir nuevamente al formulario de inicio de sesión
        exit;
    }
}
?>

