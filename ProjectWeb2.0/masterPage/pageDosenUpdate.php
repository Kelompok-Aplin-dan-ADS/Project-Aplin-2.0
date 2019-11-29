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
        <div class="inputan" style="display: table-row;">
        <span class="h1">Update Dosen</span> <br> <br>
        <span class="h6">Cari Dosen</span> <br> <br>
        <input type="text" name="searchName" id="" placeholder="Co: pak Agus"> <button class="btnSearch">Cari</button>
        <div class="result"></div>
        <br>
    </div>
</body>
</html>
<script src="jquery3.4.js"></script>
<script>
    $(document).ready(function () {
        $("#sideBar").removeClass("active");
        $(".updateDosen").addClass("active");
    });
    $(".btnSearch").click(function (e) { 
        $.ajax({
            method: "post",
            url: "Dosen/search.php",
            data:{
                nama: $("input[name=searchName]").val()
            },
            success: function (response) {
                $(".result").html(response);
            }
        });
    });
</script>