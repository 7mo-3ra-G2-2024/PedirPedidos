<?php
if(isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['DNI'];

    $sql = "INSERT INTO empleados (nombre, apellido, edad) VALUES ('$nombre', '$apellido', $dni)";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado creado correctamente";
    } else {
        echo "Error al crear empleado: " . $conn->error;
    }
}
?>