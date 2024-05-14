<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class='producto'>
  <h2>Agregar Producto</h2>
  <form action='addProducto.php' method='post'>
    <input type='text' name='nombre' required>
    <input type='text' name='precio' required>
    <input type='text' name='img' required>
    <input type='hidden' name='hiddenInput' value='hello'>
    <input type='submit' value='Agregar'>
    </form>
  <?php
    include '../navbar/navbar.php';
    include '../carrito/carrito.php';

    if(isset($_POST['hideenInput'])){
        $name = filter_input(INPUT_POST, 'nombre');
        $value = filter_input(INPUT_POST, 'precio');
        $img = filter_input(INPUT_POST, 'img');

        $consulta = $conexion->prepare("INSERT INTO `item` (`nombre`, `precio`, `img`) VALUES (:nom, :valor, :imagen)");
        $consulta->bindParam(":nom", $name);
        $consulta->bindParam(":valor", $value);
        $consulta->bindParam(":imagen", $img);

        if($consulta->execute()){
          echo "<h3>Datos cargados con éxito</h3>";
        }
    }
  ?>
  </div>
</body>
</html>