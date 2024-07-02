<?php
    require '../../conexion.php';
    $datos = verificarUsuario($conexion ,$_GET['user']);
    if (isset($datos[0])) {
        foreach ($datos as $db) {
            if ($db['password'] == md5($_GET['password'])) {
                $_SESSION['idUsuario']=$db['idUsuario'];
                $_SESSION['nombre']=$db['nombre'];
                $_SESSION['email']=$db['email'];
                if ($db['rol'] == "admin") {
                    $_SESSION['rol']="admin";
                    header("Location: ../admin/panel_admin/administratorpanel.php");
                }else {
                    $_SESSION['rol']="cliente";
                    header("Location: ../cliente/principal/principal.php");
                }
            }else{
                header("Location: login.php?error=2");
            }
        }
    }else{
        header("Location: index.php?error=1");
    }
?>

