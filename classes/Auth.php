<?php
require_once "config/conexion.php";
class Auth {
    private $conn;
    private $table = "usuarios";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function login($username, $password) {
        $query = "SELECT * FROM " . $this->table . " WHERE usuario = '$username' AND password='".md5($password)."' LIMIT 1";
        $stmt = $this->conn->query($query);
        
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_OBJ);

            # guardamos la session
            $_SESSION["user"] = $username;
            $_SESSION["pasw"] = md5($password);
            $token=md5(rand(0,100000));
            $_SESSION["token"] = $token;
                ////////////// guardar el token en la BD /////////////
                $query = "UPDATE ".$this->table." SET token = '$token' WHERE id='$user->id'";
                $stmt = $this->conn->query($query);
            # guardar cookie para recordar login
            $recordar=$_POST['recordar'] ?? 0;
            if($recordar=='1'){
            setcookie("recordar", '1', time()+2000000);
            setcookie("user", $username, time()+2000000);
            setcookie("pasw", $password, time()+2000000);
            }
            else{
            setcookie("recordar", '0');
            setcookie("user", '');
            setcookie("pasw", '');
            }
           
            return $user;
        }
        return false;
    }
    public function logout() {
        session_unset();
        session_destroy();
    }
}
?>