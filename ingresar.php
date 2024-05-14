<?php
        
        require 'conexion.php';


        $dni = filter_input(INPUT_GET, 'dni');
        $apellido = filter_input(INPUT_GET, 'apellido');
        $nombre = filter_input(INPUT_GET, 'nombre');
        $codigoPostal = filter_input(INPUT_GET, 'cp');
        $telefono = filter_input(INPUT_GET, 'telefono');
        $localidad = filter_input(INPUT_GET, 'localidad');
        $domicilio = filter_input(INPUT_GET, 'domicilio');

        if(!isset($_GET['nroHistoria'])){
            $consulta = $conexion->prepare("INSERT INTO `empleado` (`dni`, `apellido`, `nombre`, `codigoPostal`, `telefono`, `localidad`, `domicilio`) VALUES (:numDni, :ape, :nom, :codigoP, :numTel, :loc, :dom)");
            $consulta->bindParam(':numDni', $dni);
            $consulta->bindParam(':ape', $apellido);
            $consulta->bindParam(':nom', $nombre);
            $consulta->bindParam(':codigoP', $codigoPostal);
            $consulta->bindParam(':numTel', $telefono);
            $consulta->bindParam(':loc', $localidad);
            $consulta->bindParam(':dom', $domicilio);

            if($consulta->execute()){
                header("Location:tabla.php?register='done'");
            }
            else{
                echo "Algo salió mal!";
            }
        }

        if(isset($_GET['nroHistoria'])){
            $nroHistoria = filter_input(INPUT_GET, 'nroHistoria');

            $consulta = $conexion->prepare("INSERT INTO `paciente` (`nroHistoria`, `dni`, `apellido`, `nombre`, `telefono`, `cp`, `localidad`, `domicilio`) VALUES (:nroHis, :numDni, :ape, :nom, :codigoP, :numTel, :loc, :dom)");
            $consulta->bindParam(':nroHis', $nroHistoria);
            $consulta->bindParam(':numDni', $dni);
            $consulta->bindParam(':ape', $apellido);
            $consulta->bindParam(':nom', $nombre);
            $consulta->bindParam(':numTel', $telefono);
            $consulta->bindParam(':codigoP', $codigoPostal);
            $consulta->bindParam(':loc', $localidad);
            $consulta->bindParam(':dom', $domicilio);

            if($consulta->execute()){
                header("Location:tablaPacientes.php?register='done'");
            }
            else{
                echo "Algo salió mal!";
            }
        }
?>