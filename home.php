<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<?php
require("comprobar_login.php");
echo "Bienvenido " . $_SESSION["username"] . "<br>"; 
?>
<a href="cerrar.php">Cerrar sesión</a><br>
<a href="actualizar_datos.php">Actualizar datos usuario</a>
</body>
</html>