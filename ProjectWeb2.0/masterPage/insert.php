<?php
    require("config.php");

    $judul = $_POST['judul'];
    $gambar = "temppp";
    $desc = $_POST['textEvent'];
    $waktu = $_POST['waktuAcara'];
    $tempat = $_POST['place'];
    $link = "temp link";
    $tag = $_POST['eventTag'];
    $kategori = $_POST['kategori'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO acara VALUES('','$gambar','$judul','$desc','$waktu','$tempat','$link','$tag','$kategori','$jurusan')";
    $conn->query($query);
?>