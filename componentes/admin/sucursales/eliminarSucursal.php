<?php
    require "conexion.php";

        $idSucursal = $_GET['ubi_idSucursal'];
Borrar($conexion, $idSucursal, 'sucursales');

    echo "<script>alert('Se elimino con exito:)');</script>";
    header('Location:crudsucursal.php');
?>
