<?php 
   
    include 'componentes/navbar/navbar.php';
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Pedidos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<script src="scripts.js"></script>
  <h1 class="title-productos">Productos Disponibles</h1>
    
  <div class="productos-container">
    <?php
        $productos_json = file_get_contents("componentes/productos/productos.json");
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

  <div id="carrito">
    <h2>Carrito de Compras</h2>
    <ul id="lista-carrito"></ul>
    <p>Total: $<span id="total"></span></p>
    <button onclick="realizarPedido()">Realizar Pedido</button>
</div>

</body>
</html>
