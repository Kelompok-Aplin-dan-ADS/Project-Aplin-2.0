<?php
    require("config.php");

    if(isset($_POST['btnAdd'])){
        $fileName = $_FILES['imgDesc']['name'];
        $fileTmp = $_FILES['imgDesc']['tmp_name'];

        $fileDestination = "..//assets//images//".$fileName;
        move_uploaded_file($fileTmp,$fileDestination);
        $nip = $_POST['btnAdd'];
        $nama = $_POST['nama'];
        
        $email = $_POST['email'];
        $jabatan = $_POST['jabatan'];
        $quotes = $_POST['quotes'];

        $query = "UPDATE dosen SET nama='$nama',gambar='$fileDestination',email='$email',jabatan='$jabatan',quotes='$quotes' WHERE nip='$nip'";
        $conn->query($query);
        header("location:../pageDosenUpdate.php");
    }
?>
