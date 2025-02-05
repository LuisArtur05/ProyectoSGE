<?php
    //var_dump($_POST);
    require("db.php");
    $sql = "INSERT INTO coches (marca, modelo, potencia,precio)
  VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->execute(array($_POST["marca"],$_POST["modelo"],$_POST["potencia"],$_POST["precio"] ));

if ($stmt->rowCount()){
    echo"Se ha insertado el coche con exito";
    $conn = null;
    header("Location: coches.php");
    exit;
}

$conn = null;

?>