<?php
include 'conexion.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener el stock
$sql = "SELECT producto, cantidad FROM stock";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos del stock en una tabla
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["producto"]."</td><td>".$row["cantidad"]."</td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>No hay productos en el stock</td></tr>";
}

$conn->close();
?>

