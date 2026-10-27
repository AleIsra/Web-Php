<?php
require_once "../../config/conexion.php";
require_once "../../config/helpers.php";
$UserConnected=verifySession();
class Usuario {
    private $conn;
    private $table = "usuarios";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();            
    }

    public function read() {
        return $this->conn->query("SELECT * FROM $this->table ORDER BY id DESC");
    }

    public function create() {
        $nombre=$_POST['nombre'];
        $cargo=$_POST['cargo'];
        $usuario=$_POST['usuario'];
        $password=md5($_POST['password']);
        $nivel=$_POST['nivel'];
        return $this->conn->query("INSERT INTO $this->table (nombre, cargo,usuario,password,nivel) VALUES ('$nombre', '$cargo', '$usuario', '$password', '$nivel')");
    }

    public function get($id) {
        $stmt = $this->conn->query("SELECT * FROM $this->table WHERE id=$id");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function update($id) {
        $nombre=$_POST['nombre'];
        $cargo=$_POST['cargo'];
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $nivel=$_POST['nivel'];

        $query="UPDATE $this->table SET nombre='$nombre', cargo='$cargo', usuario='$usuario', nivel='$nivel'";
        if($password!=""){
        $query.=",password=md5('".$password."')";
        }            
        $query.=" WHERE id='".$id."'";
        
        return $this->conn->query($query);
    }

    public function delete($id) {
        return $this->conn->query("DELETE FROM $this->table WHERE id=$id");
    }

}
?>