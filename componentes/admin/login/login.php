<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../../css/estilos-admin.css">
    <style>
      .error{
        background-color: #ff8686;
        margin-top: 1rem;
        padding: 1rem;
        border-radius: 1.5rem;
      }
    </style>
</head>
<body>
  <div class="login-container">
    <form action="verificacion.php">
      <h2>Iniciar Sesion</h2>
      <input type="text" name="user" placeholder="Usuario" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Inicia Sesion</button>
    </form>
  </div>
  
  <?php
    if(isset($_GET['error'])){
      if ($_GET['error'] == 1) {//nombre erroneo
        echo '<div class="error">
                <h4>El nombre de usuario es invalido</h4>
              </div>';
      }
      if ($_GET['error'] == 2) {//clave erroneo
        echo '<div class="error">
                <h4>La contraseña es invalida</h4>
              </div>';
      }
    }
  ?>
</body>
</html>

