<?php  

    if(isset($_POST['submit'])){

        session_start();

        if(isset($_SESSION['idUsuario'])){

            header("Location:../principal/principal.php");
            exit();

        }

        require('../../../conexion.php');
        
        $email = filter_input(INPUT_POST, "email");

        $userType = $_POST['user-type'];

        $query = $conexion->prepare("SELECT * FROM $userType WHERE `email` = '$email'");

        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        if(count($data) > 0){

            $password = md5(filter_input(INPUT_POST, "password"));

            if($password == $data[0]['password']){

                $_SESSION['idUsuario'] = $data[0]['idUsuario'];
                $_SESSION['username'] = $data[0]['nombre'];

                header("Location:../principal/principal.php");
                exit();

            }
            else{
                header("Location:login.php?wrongPassword");
                exit();
            }

        }
        else{
            header("Location:login.php?wrongEmail");
            exit();
        }

    }
    else{
        
        header("Location:login.php");
        exit();

    }

?>