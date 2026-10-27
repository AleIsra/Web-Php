<?php
require_once "../../classes/Usuario.php";
$usuario = new Usuario();
$id = decodificar($_GET['id']);
$usuario->delete($id);
header("Location: index.php");
?>