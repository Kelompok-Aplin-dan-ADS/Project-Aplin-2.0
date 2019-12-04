<?php
    include("..//connection.php");
    $ind=$_POST["id"];
    $query=mysqli_fetch_assoc(mysqli_query($connStts,"SELECT * from jurusan_bahasa where jurusan_id=$ind"));
    session_start();
    $bahasa=$_SESSION["bahasa"];
    echo $query["jurusan_deskripsi_".$bahasa];
?>
