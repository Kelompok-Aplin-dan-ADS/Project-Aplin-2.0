</section>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="aos.css">
</head>

<body>
    <?php include_once("connection.php")?>
    <header class="main-header">
        <h1><span>History</span></h1>
        <p>Known our beloved Campus</p>
    </header>
    <main class="container">
        <?php
            $sql = "SELECT * from history";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                echo $row["isi"];
            }
        ?>
    </main>
    <script src="aos.js"></script>
    <script>
        AOS.init({
            offset: 400,
            duration: 1000
        });
    </script>
</body>

</html>