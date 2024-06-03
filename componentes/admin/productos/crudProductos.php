

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='../../../css/estilos.css'>
  <title>Document</title>
</head>
<body>
  <?php
    include '../../cliente/navbar/navbar.php';
    require '../../../conexion.php';
  ?>
  <center>
  <table border="1" style="width: 40%; margin: 20px; text-align:center;">
    <tr>
      <th>idProducto</th><th>Nombre</th><th>Precio</th>
    </tr>
    <?php

      $query = $conexion->prepare("SELECT * FROM `productos`");
      $query->execute();

      $data = $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($data as $product){
        $id = $product['idProducto'];
        $name = $product['nombre'];
        $value = $product['precio'];

        echo "<tr><td>".$id."</td><td>".$name."</td><td>".$value."</td>";
        echo "<td><a href='?action=modify&idProducto=".$id."&nombre=".$name."&precio=".$value."' style='color: green;'>Editar</a></td>";
        echo "<td><a href='?action=delete&idProducto=".$id."&nombre=".$name."&precio=".$value."' style='color: red;'>Eliminar</a></td>";
        echo "</tr>";
      }
      
      if(isset($_GET['action'])){

        if($_GET['action'] == 'add'){

          echo "<form method='post'><tr>";
          echo "<td><input type='text' name='idProducto' placeholder='Product ID'></td>";
          echo "<td><input type='text' name='nombre' placeholder='Nombre'></td>";
          echo "<td><input type='text' name='precio' placeholder='Precio'></td>";
          echo "<td><input type='submit' name='addProduct' value='Agregar' style='background-color:lightgreen;'></td>";
          echo "</tr></form>";

        }

        if($_GET['action'] == 'modify'){

          echo "<form method='post'><tr>";
          echo "<input type='hidden' name='idProducto' value='".$_GET['idProducto']."'>";
          echo "<td>".$_GET['idProducto']."</td>";
          echo "<td><input type='text' name='nombre' value='".$_GET['nombre']."'</td>";
          echo "<td><input type='text' name='precio' value='".$_GET['precio']."'</td>";
          echo "<td><input type='submit' name='modifyProduct' value='Modificar' style='background-color:lightgreen;'></td>";
          echo "</tr></form>";

        }

        if($_GET['action'] == 'delete'){
          
          $id = filter_input(INPUT_GET, "idProducto");

          $query = $conexion->prepare("DELETE FROM `productos` WHERE `idProducto`=:id");
          $query->bindParam(":id", $id);

          $query->execute();

          header('Location:crudProductos.php?');

        }
      }
      
      if(isset($_POST['addProduct'])){
        $id = filter_input(INPUT_POST, "idProducto");
        $name = filter_input(INPUT_POST, "nombre");
        $value = filter_input(INPUT_POST, "precio");

        $query = $conexion->prepare("INSERT INTO `productos` (`idProducto`, `nombre`, `precio`) VALUES (:id, :nom, :valor)");
        $query->bindParam(":id", $id);
        $query->bindParam(":nom", $name);
        $query->bindParam(":valor", $value);

        $query->execute();
        
      }

      if(isset($_POST['modifyProduct'])){
        $id = filter_input(INPUT_POST, "idProducto");
        $name = filter_input(INPUT_POST, "nombre");
        $value = filter_input(INPUT_POST, "precio");

        $query = $conexion->prepare("UPDATE productos SET `idProducto`=:id, `nombre`=:nom, `precio`=:valor WHERE `idProducto`=:id");

        $query->bindParam(":id", $id);
        $query->bindParam(":nom", $name);
        $query->bindParam(":valor", $value);

        $query->execute();

      }

    ?>
  </table>
  <a href="?action=add">Agregar Producto +</a>
  </center>
</body>
</html>