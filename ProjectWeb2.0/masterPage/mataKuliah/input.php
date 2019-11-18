<?php
    require("config.php");

    $id_matkul = $_POST['id_matkul'];
    $nipDosen = $_POST['nipDosen'];
    $nama_mata_kuliah = $_POST['nama_mata_kuliah'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mata_kuliah VALUES('$id_matkul',$nipDosen,'$nama_mata_kuliah','$jurusan')";
    $conn->query($query);
?>