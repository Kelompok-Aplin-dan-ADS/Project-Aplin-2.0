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
    <div id="sideBar">
        <div class="sideBody active insertEvent">
            Insert Event
        </div>
        <div class="sideBody updateEvent">
            Update Event
        </div>
        <div class="sideBody insertDosen">
            Insert Dosen
        </div>
        <div class="sideBody updateDosen">
            Update Dosen
        </div>
        <div class="sideBody insertMat">
            Insert Mata Kuliah
        </div>
        <div class="sideBody updateMat">
            Update Mata Kuliah
        </div>
    </div>
    <div class="container">
        


    </div>
</body>
</html>
<script src="jquery3.4.js"></script>
<script>
    $(".sideBody").click(function (e) { 
        $(".sideBody").each(function () {
            if($(this).hasClass("active")){
                $(this).removeClass("active");
            }
        });
        $(this).addClass("active");
        if($(this).hasClass("insertEvent")){
            changePage("inputEvent.php");
        }
        else if($(this).hasClass("updateEvent")){
            changePage("pageUpdate.php");
        }
        else if($(this).hasClass("insertDosen")){
            changePage("Dosen/inputDosen.php");
        }
        else if($(this).hasClass("updateDosen")){
            changePage("Dosen/pageDosenUpdate.php");
        }
        else if($(this).hasClass("insertMat")){
            changePage("mataKuliah/inputMatkul.php");
        }
        else if($(this).hasClass("updateMat")){
            changePage("mataKuliah/pageUpdate.php");
        }
    });

    function changePage(param) {
        $.ajax({
            method: "post",
            url: param,
            success: function (response) {
                $(".container").html(response);
            }
        });
    }

</script>