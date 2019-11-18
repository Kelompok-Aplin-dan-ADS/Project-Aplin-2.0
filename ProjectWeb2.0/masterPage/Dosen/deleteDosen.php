<?php
    require_once("config.php");
    $nip = $_POST['nip'];
    $query = "DELETE FROM dosen WHERE nip = '$nip'";
    $conn->query($query);
?>