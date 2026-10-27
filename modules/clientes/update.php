<?php
require_once "../../classes/Clientes.php";
$clientes = new Clientes();

$id = $_GET['id'];
$data = $clientes->get($id);

if ($_POST) {
    $clientes->update($id);
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
      <label>E-Mail</label>
      <input type="text" name="email" class="form-control" value="<?= $data->email ?>" required>
    </div>
    <div class="mb-3">
      <label>Nit</label>
      <input type="text" name="nit" class="form-control" value="<?= $data->nit ?>" required>
    </div>
    <div class="mb-3">
      <label>Telefono</label>
      <input type="text" name="telefono" class="form-control" value="<?= $data->telefono ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
  </form>
<?php include "../../layout/footer.php"; ?>