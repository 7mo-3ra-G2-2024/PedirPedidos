<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $sql = "UPDATE empleados SET nombre='$nombre', apellido='$apellido', edad=$edad WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado actualizado correctamente";
    } else {
        echo "Error al actualizar empleado: " . $conn->error;
    }
}
?>