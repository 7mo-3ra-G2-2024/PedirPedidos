<?php 
    /* require('conexion.php'); */
    include '../navbar/navbar.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../../../css/estilos.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .form-container{
            width: 30%;
            height: 80%;
            border: 1px solid black;
            border-radius: 1rem;
            padding: 1rem;

            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .form-container form{
            height: 80%;
            width: 100%;

            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .form-container form input[type="text"], [type="email"], [type="password"]{
            width: 70%;
            height: 3rem;
            border: none;
            border-bottom: 1px solid gray;

            padding: 1rem 1rem 1rem 0.5rem;
        }
        .form-container form input[type="submit"]{
            width: 70%;
            height: 3rem;
            border: none;

            background-color: #ff0000c2;
            border-radius: 2rem;
        }
        .form-container form input[type="submit"]:hover{
            transform: scale(1.05);
            transition: 150ms;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Iniciar Sesión</h1>
        <p style="width: 100%; text-align: center;">Cliente</p>
        <form action="procesar_login.php" method="POST">
            <?php
                if(isset($_GET['successfulRegister'])){
                    echo "<p style='background-color: green; width: 70%; padding: 1rem; color: white;'>Registro exitoso, por favor, inicie sesión</p>";
                }
                if(isset($_GET['wrongEmail'])){
                    echo "<p style='background-color: red; width: 70%; padding: 1rem; color: white;'>Correo inválido, intente de nuevo</p>";
                }
                if(isset($_GET['wrongPassword'])){
                    echo "<p style='background-color: red; width: 70%; padding: 1rem; color: white;'>Contraseña incorrecta, intente de nuevo</p>";
                }
                if(isset($_GET['askToLogin'])){
                    echo "<p style='background-color: red; width: 70%; padding: 1rem; color: white;'>Por favor, antes de continuar, inicie sesión</p>";
                }

            ?>
            <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" id="password" name="password" placeholder="Clave" required>

            <input type="hidden" name="user-type" value="usuarios">
            <input type="submit" name="submit" value="Iniciar Sesión">

            <a href="login_repartidor.php">Ingresar como Repartidor</a>
        </form>
    </div>
</body>
</html>
