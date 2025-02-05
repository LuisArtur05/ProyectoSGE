<?php
    session_start();
    //echo "estoy comprobando el login";
    if($_SESSION["login"]!=true)
    header("Location: index.php");

?>