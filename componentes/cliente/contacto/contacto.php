<?php 
  /* require('conexion.php'); */
  include '../navbar/navbar.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
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
        .form-container form textarea{
            width: 90%;
            height: 70%;

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
        <h1>Envíanos un mensaje</h1>
        <?php
            if(isset($_GET['messageSent'])){
                echo "<p style='width: 70%; padding: 1rem;'>Mensaje envíado con éxito, gracias por tu colaboracion!</p>";
            }
        ?>
        <form action="procesar_mensaje.php" method="post">
            <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje..." required></textarea>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
