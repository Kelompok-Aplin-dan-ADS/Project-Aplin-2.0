<?php
    require("config.php");

    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $gambar = "temp gambar";
    $email = $_POST['email'];
    $jabatan = $_POST['jabatan'];
    $quotes = $_POST['quotes'];

    $query = "UPDATE dosen SET nama='$nama',gambar='$gambar',email='$email',jabatan='$jabatan',quotes='$quotes' WHERE nip='$nip'";
    $conn->query($query);
?>
