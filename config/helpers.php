<?php
// Clave secreta opcional (puedes cambiarla)
define('SECRET_KEY', 'MiClaveSecreta123');

function codificar($texto, $clave = SECRET_KEY) {
    // Combina el texto con la clave y codifica en base64
    $texto = $texto . $clave;
    return base64_encode($texto);
}

function decodificar($textoCodificado, $clave = SECRET_KEY) {
    // Decodifica el texto base64
    $texto = base64_decode($textoCodificado);    
    // Remueve la clave al final del texto
    if (substr($texto, -strlen($clave)) === $clave) {
        return substr($texto, 0, -strlen($clave));
    } else {
        return false; // Clave incorrecta o texto manipulado
    }
}
function nivel($nivel){
    switch ($nivel) {
        case 'A':
            $res = "Administrador";
            break;
        case 'O':
            $res = "Operador";
            break;
        case 'V':
            $res = "Visualizador";
            break;            
        default:
            $res = "Error";
            break;
    }
    return $res;
}
function verifySession(){
        
        $db = new Database();
        $conn = $db->getConnection(); 

            if (isset($_SESSION["user"]) && isset($_SESSION["pasw"]) && isset($_SESSION["token"])) {
            $username = $_SESSION["user"];
            $password = $_SESSION["pasw"];
            $token = $_SESSION["token"];

            $query = "SELECT * FROM usuarios WHERE usuario = '$username' AND password='$password' AND token='$token' LIMIT 1";
            $stmt = $conn->query($query);
            
            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_OBJ);// Sesión válida
            }
        }
        // Si no es válida, redirigir al login
        header("Location: ../../index.php?sw=3");
        exit;
}
?>