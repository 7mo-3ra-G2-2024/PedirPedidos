<?php 
    /* require('conexion.php'); */
    include '../navbar/navbar.php';
    include '../carrito/carrito.php';
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
        $consulta = $conexion->prepare("SELECT * FROM item");
        $consulta->execute();
        $productos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        
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
