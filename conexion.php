<?php
session_start();
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=nego', 'root', '');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<script>console.log('Se conecto a la base de datos correctamente');</script>";
	}catch(PDOException $e){
		echo "<script>console.log('No se pudo conectar a la base de datos');</script>";
	}

function Borrar($conexion, $ubi_idSucu, $tabla){
    $consulta = $conexion->prepare("DELETE FROM $tabla WHERE idSucursal=:ubi_idSucu");
    $consulta->bindParam(":ubi_idSucu", $ubi_idSucu);
    $consulta->execute();
    echo "<script>alert('Se eliminó con éxito.');</script>";
}
      


      function editar($conexion, $ubi_idSucursal,$n_nombre,$n_direccion,$n_horaIngreso, $n_horaSal, $n_telefono,$tabla){
  $consulta=$conexion->prepare(" UPDATE `sucursales` SET  `nombre` = :n_nom, `direccion` = :n_dire, `horaIngreso` = :n_horaIn , `horaSalida` = :n_horaS, `telefono` = :n_tel WHERE `sucursales`.`idSucursal` = :ubi_idSucu");
    $consulta->bindParam(':n_nom',$n_nombre);
    $consulta->bindParam(':n_dire',$n_direccion);
    $consulta->bindParam(':n_horaIn',$n_horaIngreso);
    $consulta->bindParam(':n_horaS',$n_horaSal);
    $consulta->bindParam(':n_tel',$n_telefono);
    $consulta->bindParam(':ubi_idSucu',$ubi_idSucursal);//este debe ser igual
    $consulta->execute();
    echo "<script>alert('Se modifico con exito');</script>";
}


  function agregar($conexion, $idSucursal, $n_nombre, $n_direccion, $n_horaIngreso, $n_horaSal, $n_telefono, $tabla) {
    $consulta = $conexion->prepare("INSERT INTO `sucursales` (`idSucursal`, `nombre`, `direccion`, `horaIngreso`, `horaSalida`, `telefono`) VALUES (:ubi_idSucu, :n_nom, :n_dire, :n_horaIn, :n_horaS, :n_tel)");
    $consulta->bindParam(':n_nom', $n_nombre);
    $consulta->bindParam(':n_dire', $n_direccion);
    $consulta->bindParam(':n_horaIn', $n_horaIngreso);
    $consulta->bindParam(':n_horaS', $n_horaSal);
    $consulta->bindParam(':n_tel', $n_telefono);
    $consulta->bindParam(':ubi_idSucu', $idSucursal);
    $consulta->execute();
    echo "<script>alert('Se modificó con éxito');</script>";
}

function verificarUsuario($conexion,$user){
    $consulta=$conexion->prepare("SELECT * FROM `admins` WHERE nombre='$user'");
    $consulta->execute();
	$datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $datos;
}