<?php 
    session_start();
    unset($_SESSION["userId"]);
    unset($_SESSION["userName"]);
    session_destroy();
    header("Location: ../accessories.php");
?>