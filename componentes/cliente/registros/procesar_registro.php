<?php

  require('../../../conexion.php'); 
  
  $password = filter_input(INPUT_POST, "password");
  $email = filter_input(INPUT_POST, "email");

  if($password != $_POST['passwordConfirm']){

    header("Location:registro_cliente.php?unequalPass");
    exit();

  }

  $userType = $_POST['user-type'];

  $query = $conexion->prepare("SELECT email FROM $userType WHERE email = '$email'");

  $query->execute();
  $query = $query->fetchAll(PDO::FETCH_ASSOC);

  if(count($query) < 1){

    if($userType == "usuarios"){

      registrar_cliente($conexion, $email, $password);

    }

    if($userType == "empleados"){

      registrar_repartidor($conexion, $email, $password);

    }

  } else{ header("Location:registro_cliente.php?usedEmail"); }

  function registrar_cliente($conexion, $email, $password){

    $nombre = filter_input(INPUT_POST, "nombre");
    $password = md5($password);
    $date = date("Y-m-d");

    $query = $conexion->prepare("INSERT INTO usuarios (`nombre`, `email`, `password`, `fecha_registro`) VALUES ('$name', '$email', '$password', '$date')");

    if($query->execute()){

      header("Location:../login/login.php?successfulRegister");

    }

  }

  function registrar_repartidor($conexion, $email, $password){

    $sucursal = filter_input(INPUT_POST, "sucursal");
    $nombre = filter_input(INPUT_POST, "nombre");
    $apellido = filter_input(INPUT_POST, "apellido");
    $dni = filter_input(INPUT_POST, "dni");
    $password = md5($password);
    $telefono = filter_input(INPUT_POST, "telefono");
    $date = date("Y-m-d");

    $query = $conexion->prepare("INSERT INTO empleados (`idSucursal`, `nombre`, `apellido`, `dni`, `email`, `password`, `telefono`, `fecha_registro`) VALUES ('$sucursal', '$nombre', '$apellido', '$dni', '$email', '$password', '$telefono', '$date')");

    if($query->execute()){

      header("Location:../login/login_repartidor.php?successfulRegister");

    }

  }

?>
