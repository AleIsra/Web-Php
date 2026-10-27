<?php
require_once "../../config/conexion.php";
require_once "../../config/helpers.php";
$UserConnected=verifySession();
class Clientes {
    private $conn;
    private $table = "clientes";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function read() {
        return $this->conn->query("SELECT * FROM $this->table ORDER BY id DESC");
    }

    public function create() {
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
        $nit=$_POST['nit'];
        $telefono=$_POST['telefono'];
        return $this->conn->query("INSERT INTO $this->table (nombre, email,nit,telefono) VALUES ('$nombre', '$email', '$nit', '$telefono')"); 
        // $stmt = $this->conn->prepare("INSERT INTO $this->table (nombre, precio, stock) VALUES (?, ?, ?)");
        // return $stmt->execute([$nombre, $precio, $stock]);
    }

    public function get($id) {
        $stmt = $this->conn->query("SELECT * FROM $this->table WHERE id=$id");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function update($id) {
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
         $nit=$_POST['nit'];
         $telefono=$_POST['telefono'];
        return $this->conn->query("UPDATE $this->table SET nombre='$nombre',email='$email',nit='$nit',telefono='$telefono' WHERE id=$id");
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM $this->table WHERE id=$id");
    }
}
?>