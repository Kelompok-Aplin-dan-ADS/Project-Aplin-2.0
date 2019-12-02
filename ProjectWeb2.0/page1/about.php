<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ISTTS</title>
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../ming/aos.css">
</head>
<body>
	<?php include('fabian/navbar.php') ?>
    <?php include('ming/aboutUs.php') ?>
	<?php include('fabian/footer.php') ?>
    <script src="../bootstrap4/js/js.js"></script>
    <script src="../bootstrap4/js/proper.js"></script>
    <script src="../bootstrap4/js/bootstrap.min.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="ming/aos.js"></script>
    <script>
        AOS.init({
            offset:400,
            duration:1000
        });
        $(".about").addClass("active");
        $(".about").addClass("text-white");
        $(".about").removeClass("text-dark");
    </script>
</body>
</html>