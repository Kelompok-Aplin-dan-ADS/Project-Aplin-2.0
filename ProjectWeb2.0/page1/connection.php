<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbBase = "project-aplin-2.0";
    $dbBase2 = "sttsedunew";
    
    $conn = mysqli_connect($host,$user,$pass,$dbBase);
    $connStts = mysqli_connect($host,$user,$pass,$dbBase2);
?>