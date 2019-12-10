<?php 
    session_start();
    $username = "root";
    $password = "";
    $hostname = "localhost";
    $mysqli = new mysqli($hostname, $username, $password,'bachkhoa_computer') or die("Unable to connect to MySQL");
?>