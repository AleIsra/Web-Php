<?php 
require_once "../../config/conexion.php";
require_once "../../config/helpers.php";
$UserConnected=verifySession();
include "../../layout/header.php"; 
?>
<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-4">
    <h1 class="display-5 fw-bold">Bienvenidos al Sistema</h1>
    <p class="col-md-8 fs-4">Este es un ejemplo didáctico de un CRUD en PHP con POO. Use el menú para navegar entre Productos y Usuarios.</p>
  </div>
</div>
<?php include "../../layout/footer.php"; ?>