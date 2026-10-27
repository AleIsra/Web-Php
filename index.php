<?php 
require_once "classes/Auth.php";
$login = new Auth();
$error = $_GET['sw'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = $login->login($username, $password);

    if ($user) {
        header("Location: modules/home/index.php");
        exit;
    } else {
        $error = "1";
    }
}

$recordar = $_COOKIE['recordar'] ?? 0;
if ($recordar=='1') {
    $user=$_COOKIE['user'];
    $pasw=$_COOKIE['pasw'];
} else {
    $user='';
    $pasw='';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD MVC - Demo</title>
  <!-- Bootstrap 5 CSS via CDN -->
  <link href="vendor/bootstrap5.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100" style="background-image: url('layout/img/mozaico.jpg'); background-size: cover;">

  <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
    <h3 class="text-center mb-4">Iniciar Sesión</h3>
    <?php

  switch ($error) {
    case '1': 
      echo"<br><span class='alert alert-danger'>Error! Inserte nuevamente sus Datos...</span><br>";
      break;
    case '2': 
      echo"<br><span class='alert alert-warning'>Sesion Cerrada exitosamente</span><br>";
      break; 
    case '3': 
      echo"<br><span class='alert alert-danger'>Error en su Sesion!</span><br>";
      break;          
    default:
  }
?>
    <form method="POST">
      <!-- Usuario -->
      <div class="mb-3">
        <label for="username" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="username" placeholder="Ingrese su usuario" value="<?=$user?>">
      </div>
      <!-- Contraseña -->
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" value="<?=$pasw?>">
      </div>
      <!-- Recordar -->
      <div class="mb-3 form-check">
        <label><input class="form-check-input" <?=($recordar=='1')?'checked':''?> name="recordar" value='1' type="checkbox"/>
        Recordar </label>
      </div>
      <!-- Botón -->
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </div>
    </form>
    <p class="text-center mt-3 mb-0">
      <a href="#">¿Olvidaste tu contraseña?</a>
    </p>
  </div>
</body>
</div> <!-- /container -->
</body>
</html>