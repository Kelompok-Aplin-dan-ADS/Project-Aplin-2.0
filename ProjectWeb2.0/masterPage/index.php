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
        
    </div>
    <div class="container">
        <!-- <?php include("inputEvent.php") ?> -->
        <!-- <?php include("pageUpdate.php") ?> -->
        <?php include("inputDosen.php") ?>
    </div>
</body>
</html>