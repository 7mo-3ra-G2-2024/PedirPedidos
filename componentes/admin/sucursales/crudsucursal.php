<!DOCTYPE html>
<html>
<head>
    <title>Administrar Sucursales</title>
    <link rel="stylesheet" href="../../../css/estilos-admin.css">
</head>
<body>
<center><h1>Administrar Sucursales </h1> </center>
<div class="content">
    <div class="title"></div>
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
                    echo '<center><table border=3><tr><td>Nombre</td><td>Direccion</td><td>Hora de ingreso</td><td>Hora de salida</td><td>Telefono</td><td>Eliminar</td><td>Editar</td><td><a style="font-size:80%;" href="agregarSucursal.html">Ingresar Sucursal</a></td></tr></center>';

                    foreach ($datos as $elemento) {
                        echo "<tr>
                            <td>{$elemento['nombre']}</td>
                            <td>{$elemento['direccion']}</td>
                            <td>{$elemento['horaIngreso']}</td>
                            <td>{$elemento['horaSalida']}</td>
                            <td>{$elemento['telefono']}</td>
                            <td><a style='font-size:80%;' href='eliminarSucursal.php?ubi_idSucursal={$elemento['idSucursal']}'>ELIMINAR</a></td>
                            <td><a style='font-size:80%;' href='editarSucursal.php?ubi_idSucursal={$elemento['idSucursal']}'>EDITAR</a></td>
                            <td><a style='font-size:80%;' href='listado.php?ubi_idSucursal={$elemento['idSucursal']}'>Ver stock</a></td>
                        </tr>";
                    }
                ?>
            </form>
            <a href="../panel_admin/administratorpanel.php">Volver </a>
        </div>
    </div>
</div>
</body>
</html>
