<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM empleados WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Empleado eliminado correctamente";
    } else {
        echo "Error al eliminar al empleado: " . $conn->error;
    }
}
?