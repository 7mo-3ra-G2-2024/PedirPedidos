  <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="modificarSucursal.php">
        <?php
            require "conexion.php";
            $ubi_idSucursal=filter_input(INPUT_GET,'ubi_idSucursal');
            $consulta=$conexion->prepare("SELECT * FROM sucursales");
            $consulta->execute();
            $datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
               echo '<center><table border=3>
                    <tr>
                        <td>idSucursal</td><td>Nombre</td><td>Direccion</td><td>Hora de ingreso</td><td>Hora de salida</td><td>Telefono</td>
                    </tr></center>';
            $n=1;
            foreach($datos as $elemento){
                if($elemento['idSucursal']==$ubi_idSucursal){//if para modificar
                    echo"\n    <tr> <td>".$elemento['idSucursal']."</td> 
                    <td><input size='7%' type='text' name='nuev_nombre' value='".$elemento['nombre']."' placeholder='".$elemento['nombre']."'></td>
                    <td><input size='5%' type='text' name='nuev_direccion' value='".$elemento['direccion']."' placeholder='".$elemento['direccion']."'></td>
                    <td><input size='5%'  name='nuev_horaIng' value='".$elemento['horaIngreso']."' placeholder='".$elemento['horaIngreso']."'></td>
                    <td><input size='5%'  name='nuev_horaSal' value='".$elemento['horaSalida']."' placeholder='".$elemento['horaSalida']."'></td>
                    <td><input size='5%'  name='nuev_telefono' value='".$elemento['telefono']."' placeholder='".$elemento['telefono']."'></td>

                    <input type='hidden' name='ubi_idSucursal' value='".$elemento['idSucursal']."'>

                    <td><a style='font-size:80%;' href='crudsucursal.php'>CANCELAR</a></td> 
                     
                    <td><input type='submit' value='Listo'></td>" ;//puede ser error
                     
                }                 echo"\n    </tr>";
                $n++;
            }//foreach

        ?>
    </form>
</body>
</html>