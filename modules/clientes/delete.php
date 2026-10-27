<?php
require_once "../../classes/Clientes.php";
$clientes = new Clientes();

$id = $_GET['id'];
$clientes->delete($id);
header("Location: index.php");
?>