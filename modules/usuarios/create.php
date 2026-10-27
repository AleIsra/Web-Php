<?php
require_once "../../classes/Usuario.php";
$usuario = new Usuario();
if ($_POST) {
    $usuario->create();
    header("Location: index.php");
}
?>
<?php include "../../layout/header.php"; ?>
  <h2>Agregar Usuario</h2>
  <form method="post">    
    Nombre
      <input type="text" name="nombre" class="form-control" required>
    <br>  
    Cargo:
      <input type="text" name="cargo" class="form-control" required>
    <br>
    Usuario:
      <input type="text" name="usuario" maxlenght="15" class="form-control" required>
    <br>
    Password:
      <input type="text" name="password" maxlenght="15" class="form-control" required>
    <br>                                
    Tipo de Usuario: 
      <select name="nivel" class="form-control" required>
        <option value="">Seleccione el Tipo de Usuario:</option>  
        <option value="A">Administrador</option>
        <option value="O">Operador</option>
        <option value="V">Visualizador</option>
      </select>
    <br>
    <button type="submit" class="btn btn-dark">Guardar</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
  </form>
<?php include "../../layout/footer.php"; ?>