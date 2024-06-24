<?php
  require('../../../conexion.php'); 
  // Procesar registro de usuario
  
  $password = filter_input(INPUT_POST, "password");

  if($password != $_POST['passwordConfirm']){
    header("Location:registro_cliente.php?unequalPass");
    exit();
  }

  $email = filter_input(INPUT_POST, "email");
  $password = md5($password);

  
  $query = $conexion->prepare("SELECT email FROM usuarios WHERE email = '$email'");

  $query->execute();
  $query = $query->fetchAll(PDO::FETCH_ASSOC);

  if(count($query) < 1){

    $name = filter_input(INPUT_POST, "nombre");

    $query = $conexion->prepare("INSERT INTO usuarios (`nombre`, `email`, `password`) VALUES ('$name', '$email', '$password')");
    if($query->execute()){
      header("Location:../login/login.php?successfulRegister");
    }

  }
  else{ header("Location:registro_cliente.php?usedEmail"); }

?>
