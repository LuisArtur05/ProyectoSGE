<?php require("db.php");
$sql = "INSERT INTO users (username, password, email)
  VALUES (?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->execute(array($_POST["user"], password_hash($_POST["pass"],PASSWORD_DEFAULT),$_POST["email"]));

if ($stmt->rowCount()){
    
    $conn = null;
    header("Location: index.php");
    exit;
}

$conn = null;

?>