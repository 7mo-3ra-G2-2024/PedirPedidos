<?php
	require 'conexion.php';
	
	$idSucursal=rand(1, 100);// filtra los datos para que no sea script
    $n_nombre=filter_input(INPUT_GET,'ing_nombre');
    $n_direccion=filter_input(INPUT_GET,'ing_direccion');
    $n_horaIngreso=filter_input(INPUT_GET,'ing_horaIngreso');
 $n_horaSal=filter_input(INPUT_GET,'ing_horaSalida');
 $n_telefono=filter_input(INPUT_GET,'ing_telefono');
    
  agregar($conexion, $idSucursal,$n_nombre,$n_direccion,$n_horaIngreso, $n_horaSal, $n_telefono,'sucursales');

	//echo $conexion->lastlnsertld();
	header('Location:crudsucursal.php');
    
?>