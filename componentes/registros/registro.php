<?php
  /* require('conexion.php'); */
  include '../navbar/navbar.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="/PedirPedidos/css/estilos.css">
</head>
<body>
    <h1>Registro de Usuario</h1>
    <p>Por favor, selecciona tu tipo de usuario:</p>
    <a href="/PedirPedidos 2.0/componentes/registros/registro_cliente.php" class="btn-register">Registrarse como Cliente</a>
    <a href="/PedirPedidos 2.0/componentes/registros/registro_repartidor.php" class="btn-register">Registrarse como Repartidor</a>
</body>
</html>
