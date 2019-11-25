<?php
    require_once("config.php");
?>
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
        <span class="h1">Halaman Edit Acara</span> <br> <br>
        <div class="table"></div>
    <pre>
    <span class="h5">bukan yang ada anda cari?</span>    <input type="text" name="eventName" id="" placeholder="Judul Acara"> <button id="btnSearch">Cari</button>
    </pre>
    </div>
    <div class="result" style="display: table-row;"></div>
    </div>
</body>
</html>
<script src="jquery3.4.js"></script>
<script src="search.js"></script>
<script>
    $(document).ready(function () {
        $("#sideBar").removeClass("active");
        $(".updateEvent").addClass("active");
    });
    getTable();
    setInterval(() => {
        getTable();
    }, 1000);
    function getTable(){
        $.ajax({
            method: "get",
            url: "tableTop5.php",
            success: function (response) {
                $(".table").html(response);
            }
        });
    }
</script>