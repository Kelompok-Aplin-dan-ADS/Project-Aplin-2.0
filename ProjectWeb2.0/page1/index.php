<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ISTTS</title>
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    
</head>
<body>
	<?php include('fabian/navbar.php') ?>
    <?php include('fabian/caurousel.php') ?>
    <?php include('yongki/page1Part2.php') ?>
    <?php include('media_massa.php') ?>
    <?php include('samuel/discover-2Ralat.php')?>
    <!-- <?php include('Ming/calJur.php') ?>		 -->
	<?php include('fabian/footer.php') ?>
    <script src="../bootstrap4/js/js.js"></script>
    <script src="../bootstrap4/js/proper.js"></script>
    <script src="../bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>

<script>
    $(".tentang").addClass("active");
    $(".tentang").addClass("text-white");
    $(".tentang").removeClass("text-dark");
    function cari(){
        var kata=$("#search").val();
        $.ajax({
            method: "post",
            url: "fabian//cari.php",
            data:{
                id:kata
            },
            success: function (data) {
                $(".tempat").html(data);
                $("#exampleModalCenter").modal("show");
                
            }
        });
    }
</script>