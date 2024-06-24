<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../../../css/estilos.css'>
    <title>Document</title>
</head>
<body>
    <center><table border="1" style="margin: 10px;">
        <tr><th>ID Empleado</th><th>Nombre</th><th>Apellido</th><th>DNI</th><th>E-Mail</th><th>Teléfono</th></tr>
    <?php
        require "../../../conexion.php";
        include "../../cliente/navbar/navbar.php";

        $query = $conexion->prepare("SELECT * FROM empleados");
        $query->execute();
        
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $row){
            echo "<tr><td>".$row['idEmpleado']."<td>".$row['nombre']."</td><td>".$row['apellido']."</td><td>".$row['dni']."</td><td>".$row['email']."</td><td>".$row['telefono']."</td></tr>";
        }
    ?>
    </table></center>
</body>
</html>
