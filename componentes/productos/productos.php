<?php 
    /* require('conexion.php'); */
    include '/PedirPedidos 2.0/componentes/navbar/navbar.php';
    include '/PedirPedidos 2.0/componentes/carrito/carrito.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Pedidos</title>
    <link rel="stylesheet" href="/PedirPedidos 2.0/css/estilos.css">
</head>
<body>

  <h1 class="title-productos">Productos Disponibles</h1>
    
  <div class="productos-container">
    <?php
        $productos_json = file_get_contents("productos.json");
        $productos = json_decode($productos_json, true);
        
        foreach ($productos as $producto) {
            echo "<div class='producto'>";
            echo "<h2>" . $producto['nombre'] . "</h2>";
            echo "<p>Precio: $" . $producto['precio'] . "</p>";
            // Agregar un botón con un identificador único para cada producto
            echo "<button onclick='agregarAlCarrito(\"" . $producto['nombre'] . "\", " . $producto['precio'] . ")'>Agregar al Carrito</button>";
            echo "</div>";
        }
    ?>
  </div>

</body>
</html>
