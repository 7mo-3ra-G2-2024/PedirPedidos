<?php
    require '../../../conexion.php';
    session_start();
    $datos = verificarUsuario($conexion ,$_GET['user']);
    if (isset($datos[0])) {
        foreach ($datos as $db) {
            if ($db['password'] == md5($_GET['password'])) {
                $_SESSION['idUsuario']=$db['idUsuario'];
                $_SESSION['nombre']=$db['nombre'];
                $_SESSION['email']=$db['email'];
                header("Location: ../panel_admin/administratorpanel.php");
            }else{
                header("Location: login.php?error=2");
            }
        }
    }else{
        header("Location: login.php?error=1");
    }
?>

