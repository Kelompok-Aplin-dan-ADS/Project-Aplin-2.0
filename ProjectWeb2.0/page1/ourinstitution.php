<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ISTTS</title>
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="aos.css">
    <link rel="stylesheet" href="style-Ming.css">
</head>
<style type="text/css">
    .imgs{
        width: 100%;
    }
</style>
<body>
	<?php include('fabian/navbar.php') ?>
    <?php include('ming/ourinstitution_'.$bahasa.'.php') ?>
	<?php include('fabian/footer.php') ?>
    <script src="../bootstrap4/js/js.js"></script>
    <script src="../bootstrap4/js/proper.js"></script>
    <script src="../bootstrap4/js/bootstrap.min.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="aos.js"></script>
    <script>
        AOS.init({
            offset:400,
            duration:1000
        });
    </script>
</body>
</html>