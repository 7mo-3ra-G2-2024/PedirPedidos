<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
  <?php
    include '../navbar/navbar.php';
    include '../carrito/carrito.php';

    $productId = $_GET['id'];
    $consulta = $conexion->prepare("SELECT * FROM items WHERE `id`=:productId");
    $consulta->bindParam(':productId', $productId);

    $consulta->execute();
    $item = $consulta->fetchAll(PDO::FETCH_ASSOC);

    foreach($item as $producto){
      echo "<div class='producto'>";
      echo "<form action='modificarProducto.php' method='post'>";
      echo "<input type='hidden' name='product_id' value='".$producto['id']."'>";
      echo "<input type='text' name='nombre' value='".$producto['nombre']." placeholder='".$producto['nombre']."'>";
      echo "<input type='text' name='precio' value='".$producto['precio']." placeholder='".$producto['precio']."'>";
      echo "<input type='submit' value='Guardar'>";
      echo "</form></div>";
    }

    if(isset($_POST['product_id'])){
      $consulta = $conexion->prepare("UPDATE item SET `id`=:productId, `nombre`=:productName WHERE `id`=:productId");
      $consulta->bindParam(':productId', $productId);
    }
  ?>
</body>
</html>