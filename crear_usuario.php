<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Creado</title>
</head>
<body>

    <h2>Usuario Creado</h2>
    
    <table border="1">
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        <tr>
            <td><?php echo isset($_POST['dni']) ? $_POST['dni'] : ''; ?></td>
            <td><?php echo isset($_POST['nombre']) ? $_POST['nombre'] : ''; ?></td>
            <td><?php echo isset($_POST['apellido']) ? $_POST['apellido'] : ''; ?></td>
            <?php
    // Verificar si se han enviado los datos del formulario
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recuperar los datos del formulario
            $DNI = $_POST["DNI"];
            $Nombre = $_POST["Nombre"];
            $Apellido = $_POST["Apellido"];
        
        // Mostrar los datos en una tabla
            echo "<h2>Datos del Usuario</h2>";
            echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>Nombre</th><th>Apellido</th></tr>";
            echo "<tr><td>$DNI</td><td>$Nombre</td><td>$Apellido</td></tr>";
            echo "</table>";
    }
    ?>
</body>
</html>