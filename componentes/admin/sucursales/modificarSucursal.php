<?php
    require 'conexion.php';
	   
	$ubi_idSucursal=filter_input(INPUT_GET,'ubi_idSucursal');
    $n_nombre=filter_input(INPUT_GET,'nuev_nombre');
    $n_direccion=filter_input(INPUT_GET,'nuev_direccion');
    $n_horaIngreso=filter_input(INPUT_GET,'nuev_horaIng');
 $n_horaSal=filter_input(INPUT_GET,'nuev_horaSal');
 $n_telefono=filter_input(INPUT_GET,'nuev_telefono');
    
        
editar($conexion, $ubi_idSucursal,$n_nombre,$n_direccion,$n_horaIngreso, $n_horaSal, $n_telefono, 'sucursales');
    echo "<script>alert('Se elimino con exito:)');</script>";
    header('Location:crudsucursal.php');
?>