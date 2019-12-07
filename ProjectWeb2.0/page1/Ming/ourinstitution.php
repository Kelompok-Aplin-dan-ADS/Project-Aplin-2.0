<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="aos.css">
    <title>Document</title>
</head>
<body>
    <?php include_once("connection.php")?>
    <main class="container" style="overflow:hidden;">
        <?php
            $sql = "SELECT * from institusi";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                echo $row["isi"];
            }
        ?>
    </main>
    <script src="aos.js"></script>
    <script>
        AOS.init({
            offset:400,
            duration:1000
        });
    </script>
</body>
</html>