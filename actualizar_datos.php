<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
require("db.php");
session_start();

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->execute(array($_SESSION["username"]));
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

//var_dump($usuario);

?>
<form action="update_user_data.php" method="post">
User <input type="text" name="user" value="<?php echo $usuario["username"]?>" readonly> <br>
Antiguo password<input type="text" name="oldpass" value=""> <br>
Nuevo password<input type="text" name="newpass" value=""> <br>
Confirmar nuevo password<input type="text" name="newpass2" value=""> <br>
Email <input type="email" name="email" value="<?php echo $usuario["email"]?>"> <br>
<input type="submit" value="Actualizar">
<a href="home.php">Volver sin actualizar</a>
</form>
