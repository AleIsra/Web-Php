<?php
require_once "../../classes/Clientes.php";
$clientes = new Clientes();
$data = $clientes->read();
?>
<?php include "../../layout/header.php"; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2 class="mb-0">Productos</h2>
  <a href="create.php" class="btn btn-dark">Agregar Producto</a>
</div>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead class="table-dark">
    <tr>
      <th>ID</th><th>NOMBRE</th><th>E-MAIL</th><th>NIT</th><th>TELEFONO</th><th width="150">ACCIONES</th>
    </tr>
    </thead>
    <tbody>
    <?php while($row = $data->fetch(PDO::FETCH_OBJ)) { ?>
      <tr>
        <td><?=$row->id?></td>
        <td><?=$row->nombre?></td>
        <td><?=$row->email?></td>
        <td><?=$row->nit?></td>
        <td><?=$row->telefono?></td>
        <td>
          <a href="update.php?id=<?=$row->id?>" class="btn btn-warning btn-sm">Editar</a>
          <a href="delete.php?id=<?=$row->id?>" class="btn btn-danger btn-sm" onclick="return confirm('esta seguro de Eliminar?')">Eliminar</a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
    </div>
<?php include "../../layout/footer.php"; ?>