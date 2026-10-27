<?php
require_once "../../classes/Producto.php";
$producto = new Producto();

$id = $_GET['id'];
$data = $producto->get($id);

if ($_POST) {
    $producto->update($id);
    header("Location: index.php");
}
?>
<?php include "../../layout/header.php"; ?>
  <h2>Editar Producto</h2>
  <form method="post">
    <div class="mb-3">
      <label>Nombre</label>
      <input type="text" name="nombre" class="form-control" value="<?= $data->nombre ?>" required>
    </div>
    <div class="mb-3">
      <label>precio</label>
      <input type="text" name="precio" class="form-control" value="<?= $data->precio ?>" required>
    </div>
    <div class="mb-3">
      <label>stock</label>
      <input type="text" name="stock" class="form-control" value="<?= $data->stock ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
  </form>
<?php include "../../layout/footer.php"; ?>