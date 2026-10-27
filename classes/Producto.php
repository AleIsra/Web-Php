<?php
require_once "../../config/conexion.php";
require_once "../../config/helpers.php";
$UserConnected=verifySession();
class Producto {
    private $conn;
    private $table = "productos";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function read() {
        return $this->conn->query("SELECT * FROM $this->table ORDER BY id DESC");
    }

    public function create() {
        $nombre=$_POST['nombre'];
        $precio=$_POST['precio'];
        $stock=$_POST['stock'];
        return $this->conn->query("INSERT INTO $this->table (nombre, precio,stock) VALUES ('$nombre', '$precio', '$stock')"); 
        // $stmt = $this->conn->prepare("INSERT INTO $this->table (nombre, precio, stock) VALUES (?, ?, ?)");
        // return $stmt->execute([$nombre, $precio, $stock]);
    }

    public function get($id) {
        $stmt = $this->conn->query("SELECT * FROM $this->table WHERE id=$id");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function update($id) {
        $nombre=$_POST['nombre'];
        $precio=$_POST['precio'];
         $stock=$_POST['stock'];
        return $this->conn->query("UPDATE $this->table SET nombre='$nombre',precio='$precio',stock='$stock' WHERE id=$id");
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM $this->table WHERE id=$id");
    }
}
?>