<?php
    require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('../navbar.php') ?>
    <?php include("sidebar.php") ?>
    <div class="container">
        <h1>Update Mata Kuliah</h1> <br>
        <span class="h6">Cari Mata Kuliah</span>&nbsp; &nbsp;
        <input type="text" name="searchVal" id="" placeholder="Co: Sistem Digital">
        <button class="btnSearch">Cari</button> <br>
        <div class="result"></div>
    </div>
</body>
</html>
<script src="jquery3.4.js"></script>
<script>
     $(document).ready(function () {
        $("#sideBar").removeClass("active");
        $(".updateMat").addClass("active");
    });
    $(".btnSearch").click(function (e) { 
        $.ajax({
            method: "post",
            url: "mataKuliah/search.php",
            data: {
                name: $("input[name=searchVal]").val()
            },
            success: function (response) {
                $(".result").html(response);
            }
        });
    });
</script>
