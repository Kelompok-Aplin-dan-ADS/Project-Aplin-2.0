<?php
    require("config.php");
    $id_matkul = $_POST['id_matkul'];

    $namaDosen = $_POST['namaDosen'];
    $query = "SELECT * FROM dosen WHERE nama = '$namaDosen'";
    $temp = $conn->query($query);
    $temp2 = mysqli_fetch_assoc($temp);

    $nip = $temp2['nip'];
    
    $id_matkul = $_POST['id_matkul'];
    $nama_mata_kuliah = $_POST['nama_mata_kuliah'];
    $jurusan = $_POST['jurusan'];
    
    $query = "UPDATE mata_kuliah SET id_matkul ='$id_matkul',nama_mata_kuliah = '$nama_mata_kuliah',jurusan = '$jurusan' WHERE id_matkul = '$id_matkul'";
    
    $conn->query($query);
?>