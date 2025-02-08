<?php require("db.php");

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->execute(array($_POST["user"]));

if ($stmt->rowCount()){
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if($_POST["pass"]===$usuario["password"]){ //FALTA HASHEARLA
        session_start();
        $_SESSION["username"] = $_POST["user"];
        $_SESSION["login"]=true;

        $conn = null;
        header("Location: home.php");
        exit;
    }else{
        $conn = null;
        header("Location:index.php");
        exit;
    }
    
} else{
    $conn = null;
    header("Location:index.php");
    exit;
}

$conn = null;

?>