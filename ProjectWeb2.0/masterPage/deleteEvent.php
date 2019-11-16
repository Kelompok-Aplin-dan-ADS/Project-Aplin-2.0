<?php
    require("config.php");
    $id = $_POST['id'];
    $query = "DELETE FROM acara WHERE id_acara = $id";
    $conn->query($query);
?>