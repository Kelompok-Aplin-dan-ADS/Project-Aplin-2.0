<?php
    require_once("config.php");

    if(isset($_POST["btnSend"])){
        
        $fileName = $_FILES['imgFile']['name'];
        $fileTmp = $_FILES['imgFile']['tmp_name'];
        $fileDestination = "./../assets/events/".$fileName;
        move_uploaded_file($fileTmp,$fileDestination);
        $judul = $_POST['judul'];
        $desc = $_POST['textEvent'];
        $waktu = $_POST['waktuAcara'];
        $tempat = $_POST['place'];
        $link = "temp link";
        $tag = $_POST['eventTag'];
        $kategori = $_POST['kategori'];
        $jurusan = $_POST['jurusan'];

        $query = "INSERT INTO acara VALUES('','$fileDestination','$judul','$desc','$waktu','$tempat','$link','$tag','$kategori','$jurusan')";
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
        <span class="h1">Halaman Masukan Acara Baru</span> <br> <br>
        <form action="#" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Judul Acara: </td>
                    <td><input type="text" name="judul" id="" class="" placeholder="Co: pekan kampus"></td>
                </tr>
                <tr>
                    <td>Gambar Acara: </td>
                    <td><input type="file" name="imgFile" id=""></td>
                </tr>
                <tr>
                    <td>Deskripsi  Acara: </td>
                    <td>
                        <textarea name="textEvent" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Waktu Acara</td>
                    <td><input type="date" name="waktuAcara" id=""></td>
                </tr>
                <tr>
                    <td>Tempat Acara</td>
                    <td>
                        <input type="text" name="place" id="">
                    </td>
                </tr>
                <tr>
                    <td>Link Halaman</td>
                    <td><input type="text" name="linkPage" id=""></td>
                </tr>
                <tr>
                    <td>Kategori Acara</td>
                    <td>
                        <input type="text" name="kategori" id="">
                    </td>
                </tr>
                <tr>
                    <td>Tag Acara</td>
                    <td><input type="text" name="eventTag" id=""></td>
                </tr>
                <tr>
                    <td>Acara Jurusan</td>
                    <td>
                        <select name="jurusan" id="">
                            <option value="S1-Informatika">S1-Informatika</option>
                            <option value="S1-DKV">S1-DKV</option>
                            <option value="S1-SIB">S1-SIB</option>
                            <option value="S1-Elektro">S1-Elektro</option>
                            <option value="S1-Industri">S1-Industri</option>
                            <option value="D3-Informatika">D3-Informatika</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btnSend" value="Kirim"></td>
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
        $(".insertEvent").addClass("active");
    });
</script>