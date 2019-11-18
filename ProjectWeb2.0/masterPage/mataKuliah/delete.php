<?php
    require("config.php");
    $id_matkul = $_POST['id_matkul'];
    $query = "DELETE FROM mata_kuliah WHERE id_matkul = '$id_matkul'";
    $conn->query($query);
?>
