<?php
require_once "../../classes/Usuario.php";
$usuario = new Usuario();

$id = decodificar($_GET['id']);
$data = $usuario->get($id);

if ($_POST) {
    $usuario->update($id);
    header("Location: index.php");
}
?>
<?php include "../../layout/header.php"; ?>
  <h2>Editar Usuario</h2>
  <form method="post">
    Nombre
      <input type="text" name="nombre" class="form-control" value="<?=$data->nombre?>" required>
    <br>  
    Cargo:
      <input type="text" name="cargo" class="form-control" value="<?=$data->cargo?>" required>
    <br>
    Usuario:
    <input type="text" name="usuario" maxlenght="15" class="form-control" value="<?=$data->usuario?>">
    <br>
    Password:
        <input type="text" name="password" maxlenght="15" class="form-control"
        placeholder="">
        <span class="text-danger small">Deje en Blanco si no desea cambiar la contraseña</span>
    <br>     <br>                           
    NIVEL: 
    <select name="nivel" class="form-control">
        <option value="A" <?=($data->nivel=='A')?"selected":""?>>Administrador</option>
        <option value="O" <?php if($data->nivel=='O') { echo "selected"; }?>>Operador</option>
        <option value="V" <?php if($data->nivel=='V') { echo "selected"; }?>>Visualizador</option>
    </select>
  <br>
    <button type="submit" class="btn btn-dark">Actualizar</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
  </form>
<?php include "../../layout/footer.php"; ?>