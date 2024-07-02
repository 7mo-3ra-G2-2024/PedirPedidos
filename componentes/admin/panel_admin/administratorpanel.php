<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel='stylesheet' href='../../../css/estilos.css'>
  <link rel='stylesheet' href='./adminpanel.css'>
</head>
<body>
  <?php
    include '../../cliente/navbar/navbar.php';
    // include '../carrito/carrito.php';


  ?>
  <div class='options-container'>
    <h2>Opciones de administrador</h2>
    <a href='../empleados/leer.php' class='option'>
      <div class='option-upper-div'>
        <img src='https://t4.ftcdn.net/jpg/03/14/42/89/360_F_314428925_EGg34jnYAMrqmwUTc2mhUDxqbI3dGbHK.jpg' alt=''>
      </div>
      <h3>Ver Empleados</h3>
    </a>
    <a href='../stats_ejemplo/' class='option'>
      <div class='option-upper-div'>
        <img src='https://t3.ftcdn.net/jpg/05/46/46/14/360_F_546461498_eAK0ADH2mE0Y1VNG7wpjIgtXFxT0mR0a.jpg'>
      </div>
      <h3>Ver Ventas</h3>
    </a>
    <a href='../sucursales/crudsucursal.php' class='option'>
      <div class='option-upper-div'>
        <img src='https://t3.ftcdn.net/jpg/01/10/68/02/360_F_110680229_vf4Kpwnk6axfenTvelXQLb8XkJ8jnO5Y.jpg'>
      </div>
      <h3>Ver Sucursales</h3>
    </a>
    <a href='../productos/crudProductos.php' class='option'>
      <div class='option-upper-div'>
        <img src='https://cdn-icons-png.freepik.com/512/8676/8676496.png'>
      </div>
      <h3>Administrar Productos</h3>
    </a>
    <a href='../caja/index.php' class='option'>
      <div class='option-upper-div'>
        <img src='https://cdn-icons-png.flaticon.com/512/1198/1198290.png'>
      </div>
      <h3>Caja</h3>
    </a>
    <hr style='width:100%;'>
  </div>
</body>
</html>