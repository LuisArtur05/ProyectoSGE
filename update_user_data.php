<?php
$usu = $_POST["user"];
$correo = $_POST["email"];
$antiguo = $_POST["oldpass"];
$nuevo = $_POST["newpass"];

include("db.php");
// primero vamos a buscar y ver que el password esta ok

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->execute(array($_POST["user"]));

if ($stmt->rowCount()){ //aqui recupero el password
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);//relleno el array de datos de user

    if(password_verify($_POST["oldpass"],$usuario["password"])){//compruebo que el pass
        $sql = "UPDATE users SET password=?, email=?  WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(password_hash($nuevo,PASSWORD_DEFAULT),$correo, $usu));
        $conn = null;
        header("Location: home.php");
        exit;
    }
    else{
        $conn = null;
        header("Location:home.php");
        exit;
    }
    
} else{
    $conn = null;
    header("Location:home.php");
    exit;
}










$sql = "UPDATE users SET email=? WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->execute(array($correo,$usuario));

//$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

//var_dump($usuario);

header("Location: home.php");

?>