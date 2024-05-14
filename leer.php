<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table></table>
<?php
$sql = "SELECT id, nombre, apellido, DNI FROM empleados";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . " - Nombre: " . $row["nombre"]. " " . $row["apellido"]. " - DNI: " . $row["DNI"]. "<br>";
    }
} else {
    echo "No hay empleados";
}
?>
    
</body>
</html>
