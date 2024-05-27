<?php
  /* require('conexion.php'); */
  include '/PedirPedidosm/componentes/navbar/navbar.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="/PedirPedidosm/css/estilos.css">
</head>
<body>
    <h1>Registro de Usuario</h1>
    <p>Por favor, selecciona tu tipo de usuario:</p>
    <a href="/PedirPedidosm/componentes/registros/registro_cliente.php" class="btn-register">Registrarse como Cliente</a>
    <a href="/PedirPedidosm/componentes/registros/registro_repartidor.php" class="btn-register">Registrarse como Repartidor</a>
</body>
</html>
