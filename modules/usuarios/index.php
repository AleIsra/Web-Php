<?php
require_once "../../classes/Usuario.php";
$usuario = new Usuario();
$data = $usuario->read();
$i=1;
?>
<?php include "../../layout/header.php"; ?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2 class="mb-0">Usuarios</h2>
  <a href="create.php" class="btn btn-dark">Agregar Usuario</a>
</div>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead class="table-dark">
    <tr>
      <th>#</th><th>NOMBRE</th><th>CARGO</th><th>USUARIO</th><th>NIVEL</th><th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?php while($row = $data->fetch(PDO::FETCH_OBJ)) { ?>
      <tr>
        <td><?=$i++?></td>
        <td><?=$row->nombre?></td>
        <td><?=$row->cargo?></td>
        <td><?=$row->usuario?></td>
        <td><?=nivel($row->nivel)?></td>
        <td width="150px">
          <a href="update.php?id=<?=codificar($row->id)?>" class="btn btn-warning btn-sm">Editar</a>
          <a href="delete.php?id=<?=codificar($row->id)?>" class="btn btn-danger btn-sm" onclick="return confirm('esta seguro de Eliminar?')">Eliminar</a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
  </div>
<?php include "../../layout/footer.php"; ?>