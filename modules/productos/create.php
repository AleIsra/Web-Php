<?php
require_once "../../classes/Producto.php";
$producto = new Producto();
if ($_POST) {
    $producto->create();
    header("Location: index.php");
}
?>
<?php include "../../layout/header.php"; ?>
  <h2>Agregar Producto</h2>
  <form method="post">
    <div class="mb-3">
      <label>Nombre</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Precio</label>
      <input type="text" name="precio" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Stock</label>
      <input type="text" name="stock" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
  </form>
<?php include "../../layout/footer.php"; ?>