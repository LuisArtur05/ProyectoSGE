<?php
    echo"Estoy en la pagina de coches";
    require("db.php");
    $sql = "SELECT * FROM coches";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount()){
        $coche = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($coche);
    }
        