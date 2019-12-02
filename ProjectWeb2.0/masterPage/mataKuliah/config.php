<?php session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbBase = "project-aplin-2.0";
    $dbBase2 = "sttsedunew";
    $conn = mysqli_connect($host,$user,$password,$dbBase);
    $conn2 = mysqli_connect($host,$user,$password,$dbBase2);

?>