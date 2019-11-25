<?php
    require_once("config.php");

    if(isset($_POST['btnAdd'])){
        $fileName = $_FILES['imgFile']['name'];
        $fileTmp = $_FILES['imgFile']['tmp_name'];
        $fileDestination = "..//assets//images//".$fileName;
        move_uploaded_file($fileTmp,$fileDestination);
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $jabatan = $_POST['jabatan'];
        $quotes = $_POST['quotes'];

        $query = "SELECT * FROM dosen";
        $jum = $conn->query($query);
        $jum2 =  $jum->num_rows;
        $jum2++;

        $query = "INSERT INTO dosen VALUES('$jum2','$nama','$email','$jabatan','$fileDestination','$quotes')";
        $conn->query($query);
    }
    
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
        <span class="h1">Tambah Dosen Baru</span> <br>
        <form action="#" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><input type="file" name="imgFile" id=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" id=""></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td><input type="text" name="jabatan" id=""></td>
                </tr>
                <tr>
                    <td>Quotes</td>
                    <td>
                        <textarea name="quotes" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btnAdd" value="Tambah" id=""></td>
                </tr>
            </table>
        </form>

        <br>

        </div>
    </div>
</body>
</html>
<script src="jquery3.4.js"></script>
<script>
    $(document).ready(function () {
        $("#sideBar").removeClass("active");
        $(".insertDosen").addClass("active");
    });
</script>

