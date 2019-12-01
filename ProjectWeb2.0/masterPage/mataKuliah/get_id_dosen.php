<?php
    require("config.php");

    $nama_dosen = $_POST['dosenName'];
    $query = "SELECT * FROM dosen WHERE nama = '$nama_dosen'";
    $temp = $conn->query($query);
    $temp2 = mysqli_fetch_assoc($temp);
    $nipDosen = $temp2['nip']; // dapatkan id dosen

    echo $nipDosen;
?>