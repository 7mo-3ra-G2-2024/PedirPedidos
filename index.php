<?php 
    require('conexion.php');
    include 'navbar.php';
    include 'carrito.php'; // Agregamos el archivo del carrito de compras
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Pedidos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1 class="title_index">Productos Disponibles</h1>
    
<div class="productos-container">
    <?php
        $productos_json = file_get_contents("productos.json");
        $productos = json_decode($productos_json, true);
        
        foreach ($productos as $producto) {
            echo "<div class='producto'>";
            echo "<h2>" . $producto['nombre'] . "</h2>";
            echo "<p>Precio: $" . $producto['precio'] . "</p>";
            echo "<button onclick='agregarAlCarrito(\"" . $producto['nombre'] . "\", " . $producto['precio'] . ")'>Agregar al Carrito</button>";
            echo "</div>";
        }
    ?>
</div>

<!-- Mostramos el carrito de compras -->
<?php include 'carrito_componente.php'; ?>

<script src="scripts.js"></script>
</body>
</html>
