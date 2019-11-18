<?php
    require("config.php");

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jabatan = $_POST['jabatan'];
    $gambar = "tempGambar";
    $quotes = $_POST['quotes'];

    $query = "SELECT * FROM dosen";
    $jum = $conn->query($query);
    $jum2 =  $jum->num_rows;

    $query = "INSERT INTO dosen VALUES('$jum2','$nama','$email','$jabatan','$gambar','$quotes')";
    $conn->query($query);
?>