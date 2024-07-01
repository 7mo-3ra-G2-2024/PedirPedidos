<?php 
    /* require('conexion.php'); */
    include '../navbar/navbar.php';
    // include '../carrito/carrito.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Pedidos</title>
    <link rel="stylesheet" href="../../../css/estilos.css">
</head>
<body>
    
  <h1 style="text-align: center;">Productos</h1>
  <div class="productos-container">
    <?php
        $productos_json = file_get_contents("../productos/productos.json");
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
  <hr style="width:100%">

  <h1 style="text-align: center;">Combos</h1>
  <div class="combos-container">
    <?php
      $file = file_get_contents("../productos/combos.json");
      $combos = json_decode($file, true);

      foreach($combos as $combo){
        echo "<div class='producto'>";
            echo "<h2>" . $combo['nombre'] . "</h2>";
            echo "<p>Precio: $" . $combo['precio'] . "</p>";

            echo "<button onclick='agregarAlCarrito(\"" . $combo['nombre'] . "\", " . $combo['precio'] . ")'>Agregar al Carrito</button>";
            echo "</div>";
      }
    ?>
  </div>
      
</body>
</html>
