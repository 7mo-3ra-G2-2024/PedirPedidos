<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../../css/estilos-admin.css">
</head>
<body>
  <div class="login-container">
    <form action="verificacion.php" method="POST">
      <h2>Iniciar Sesion</h2>
      <input type="text" name="user" placeholder="Usuario" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Inicia Sesion</button>
    </form>
  </div>

</body>
</html>

