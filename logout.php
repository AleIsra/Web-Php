<?php
require_once "classes/Auth.php";
$login = new Auth();
$login->logout();
header("Location: index.php?sw=2");
?>