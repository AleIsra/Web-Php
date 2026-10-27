<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD MVC - Demo</title>
  <!-- Bootstrap 5 CSS via CDN -->
  <link href="../../vendor/bootstrap5.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../vendor/fontawesome-free-6.7.2-web/css/all.min.css" rel="stylesheet">
</head>
<body style="background-image: url('../../layout/img/mozaico.jpg'); background-size: cover;">
  <div class="container">
  <img src="../../layout/img/banner.png" class="img-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="../../modules/home/index.php">MiSistema</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="../../modules/home/index.php"><i class="fas fa-home"></i> Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="../../modules/usuarios/index.php"><i class="fas fa-user"></i> Usuarios</a></li>
        <li class="nav-item"><a class="nav-link" href="../../modules/productos/index.php"><i class="fas fa-table"></i> Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="../../modules/clientes/index.php"><i class="fa-solid fa-users"></i> Clientes</a></li>            
        <li class="nav-item"><a class="nav-link" href="../../logout.php"><i class="fa-solid fa-person-walking-arrow-right"></i> Cerrar Sesion</a></li>
      </ul>
      <div class="d-flex">
        <span class="navbar-text text-white">Usuario: <?=$UserConnected->nombre??'Ninguno'?></span>
      </div>  
    </div>
  </div>
</nav>
</div>
<div class="container">
