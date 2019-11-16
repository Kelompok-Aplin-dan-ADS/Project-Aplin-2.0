<?php
    require("config.php");

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $gambar = $_POST['gambar'];
    $desc = $_POST['desc'];
    $waktu = $_POST['waktu'];
    $tempat = $_POST['tempat'];
    $link = $_POST['link'];
    $tag = $_POST['tag'];
    $kategori = $_POST['kategori'];
    $jurusan = $_POST['jurusan'];
    $query = "UPDATE acara SET judul='$judul',gambar='$gambar',deskripsi='$desc',waktu='$waktu',tempat='$tempat',link_halaman='$link',tag='$tag',kategori='$kategori',jurusan='$jurusan' WHERE id_acara = $id";
    echo $query;
    $conn->query($query);
?>