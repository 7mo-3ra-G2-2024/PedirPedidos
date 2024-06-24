<?php

    if(isset($_POST['submit'])){
        
        session_start();

        require("../../../conexion.php");

        if(isset($_SESSION['idUsuario'])){

            $message = filter_input(INPUT_POST, "mensaje");
            $date = date("Y-m-d");

            $query = $conexion->prepare("INSERT INTO mensajes (`mensaje`, `fecha`) VALUES ('$message', '$date')");

            if($query->execute()){

                header("Location:contacto.php?messageSent");
                exit();

            }

        }
        else{
            header("Location:../login/login.php?askToLogin");
            exit();
        }
        
    }

?>