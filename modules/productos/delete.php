<?php
require_once "../../classes/Producto.php";
$producto = new Producto();

$id = $_GET['id'];
$producto->delete($id);
header("Location: index.php");
?>