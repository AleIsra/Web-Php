<?php
require_once "../../classes/Clientes.php";
$clientes = new Clientes();
if ($_POST) {
    $clientes->create();
    header("Location: index.php");
}
?>
<?php include "../../layout/header.php"; ?>
  <h2>Agregar Cliente</h2>
  <form method="post">
    <div class="mb-3">
      <label>Nombre</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>E-mail</label>
      <input type="text" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>NIT</label>
      <input type="text" name="nit" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Telefono</label>
      <input type="text" name="telefono" class="form-control" required>
    </div>
  
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
  </form>
<?php include "../../layout/footer.php"; ?>