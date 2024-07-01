<?php 
  /* require('conexion.php'); */
  include '../navbar/navbar.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Repartidor</title>
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
            width: 50%;
            height: 80%;
            border: 1px solid black;
            border-radius: 1rem;

            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .form-container form{
            width: 100%;
            height: 80%;

            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            align-items: center;
        }
        .form-container form input[type="text"], [type="email"], [type="password"]{
            width: 40%;
            height: 3rem;
            border: none;
            border-bottom: 1px solid gray;

            padding: 1rem 1rem 1rem 0.5rem;
        }
        .form-container form select{
            width: 40%;
            height: 3rem;
            border-radius: 2rem 0rem 0rem 2rem;

            padding: 0rem 0rem 0rem 1rem;
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
        <h1>Registro de Repartidor</h1>
        <form action="procesar_registro.php" method="POST">
        <?php
                 if(isset($_GET['unequalPass'])){
                    echo "<p style='background-color: red; width: 70%; padding: 1rem; color: white;'>Las contraseñas no coinciden, intente de nuevo</p>";
                 }
                 
                 if(isset($_GET['usedEmail'])){
                    echo "<p style='background-color: red; width: 70%; padding: 1rem; color: white;'>Ese correo ya está en uso, intente de nuevo</p>";
                 }
            ?>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
            <input type="text" id="dni" name="dni" placeholder="DNI" required>
            <input type="text" id="telefono" name="telefono" placeholder="Teléfono" required>
            <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" id="password" name="password" placeholder="Clave" required>
            <input type="password" id="password" name="passwordConfirm" placeholder="Confirmar Clave" required>
            <select name="sucursal">
                <option value="1">Sucursal Tortuguitas</option>
                <option value="2">Sucursal Grand Bourg</option>
            </select>

            <input type="hidden" name="user-type" value="empleados">
            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>
