<?php
    require_once("koneksi.php");
    $id=$_GET["acara"];
    $semuaAcara=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from acara where id_acara=$id"));
    include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src=".<?=$semuaAcara["gambar"]?>" alt="">
    <div><?php echo $semuaAcara["tempat"]." ".$semuaAcara["waktu"]?></div>
    <div><?php echo $semuaAcara["judul"]?></div>
    <div><?php echo $semuaAcara["deskripsi"]?></div>
</body>
</html>