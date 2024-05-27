<!DOCTYPE html>
<html>
<head>
    <title>Administrar Sucursales</title>
    <link rel='stylesheet' href='sucursal.css'>
</head>
<body>
<div class="content">
    <h2 class='title'>Administrar Sucursales</h2>
    <div class="info">
        <div class="lateral">
        </div>
        <div class="central">
            <form action="?.php">
                <?php
                    // Incluir el archivo de conexión
                    require '../../../conexion.php';
                    
                    // Obtener parámetros de filtro
                    $idSucursal = filter_input(INPUT_GET, 'idSucursal');
                    $nombre = filter_input(INPUT_GET, 'nombre');
                    $direccion = filter_input(INPUT_GET, 'direccion');
                    $horaIngreso = filter_input(INPUT_GET, 'horaIngreso');
                    $horaSalida = filter_input(INPUT_GET, 'horaSalida');
                    $telefono = filter_input(INPUT_GET, 'telefono');

                    // Preparar y ejecutar la consulta
                    $consulta = $conexion->prepare("SELECT * FROM `sucursales` WHERE `idSucursal` LIKE :idSucursal");
                    $consulta->execute(['idSucursal' => '%' . $idSucursal . '%']);
                    $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

                    // Generar la tabla con los resultados
                    echo '<center><table border=3>
                    <tr>
                        <td>idSucursal</td><td>Nombre</td><td>Direccion</td><td>Hora de ingreso</td><td>Hora de salida</td><td>Telefono</td><td>Eliminar</td><td>Editar</td>
                        <td><a style="font-size:80%;" href="agregarSucursal.html">Ingresar Sucursal</a></td>
                    </tr></center>';

                    foreach ($datos as $elemento) {
                        echo "<tr>
                            <td>{$elemento['idSucursal']}</td>
                            <td>{$elemento['nombre']}</td>
                            <td>{$elemento['direccion']}</td>
                            <td>{$elemento['horaIngreso']}</td>
                            <td>{$elemento['horaSalida']}</td>
                            <td>{$elemento['telefono']}</td>
                            <td><a style='font-size:80%;' href='eliminarSucursal.php?ubi_idSucursal={$elemento['idSucursal']}'>ELIMINAR</a></td>
                            <td><a style='font-size:80%;' href='editarSucursal.php?ubi_idSucursal={$elemento['idSucursal']}'>EDITAR</a></td>
                        </tr>";
                    }
                ?>
            </form>
        </div>
    </div>
</div>
</body>
</html>