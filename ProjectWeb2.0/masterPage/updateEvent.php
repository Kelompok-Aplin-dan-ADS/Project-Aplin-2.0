<?php
    require_once("config.php");

    if(isset($_POST['del'])){
        $id = $_POST['del'];
        $query = "DELETE FROM acara WHERE id_acara = $id";
        $conn->query($query);
        header("location: pageUpdate.php");
    }
    else if(isset($_POST['btnSend'])){
        $fileName = $_FILES['imgFile']['name'];
        $fileTmp = $_FILES['imgFile']['tmp_name'];
        $fileDestination = "./../assets/events/".$fileName;
        move_uploaded_file($fileTmp,$fileDestination);

        $id = $_POST['btnSend'];
        $judul = $_POST['judul'];
        $desc = $_POST['textEvent'];
        $waktu = $_POST['waktuAcara'];
        $tempat = $_POST['place'];
        $link = $_POST['linkPage'];
        $tag = $_POST['eventTag'];
        $kategori = $_POST['kategori'];
        $jurusan = $_POST['jurusan'];
        $query = "UPDATE acara SET judul='$judul',gambar='$fileDestination',deskripsi='$desc',waktu='$waktu',tempat='$tempat',link_halaman='$link',tag='$tag',kategori='$kategori',jurusan='$jurusan' WHERE id_acara = $id";
        $conn->query($query);
        header("location: pageUpdate.php");
    }
    else{
        $id = $_POST['id'];
        $query = "SELECT * FROM acara WHERE id_acara = $id";
        $acara = $conn->query($query);

        $listAcara = mysqli_fetch_assoc($acara);

        $arrJurusan = [];
        $arrJurusan[0] = "S1-Informatika";
        $arrJurusan[1] = "S1-DKV";
        $arrJurusan[2] = "S1-SIB";
        $arrJurusan[3] = "S1-Elektro";
        $arrJurusan[4] = "S1-Industri";
        $arrJurusan[5] = "D3-Informatika";
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
        <div class="update">
            <form action="#" method="post">
                <table>
                    <tr>
                        <td>Judul Acara: </td>
                        <td><input type="text" name="judul" id="" class="" value="<?= $listAcara['judul'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Gambar Acara: </td>
                        <td><input type="file" name="imgFile" id=""></td>
                        
                    </tr>
                    <tr>
                        <td>Deskripsi  Acara: </td>
                        <td>
                            <textarea name="textEvent" id="text-Area" cols="30" rows="10"><?php echo $listAcara['deskripsi'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Waktu Acara</td>
                        <td><input type="date" name="waktuAcara" id="" value="<?=$listAcara['waktu']?>"></td>
                    </tr>
                    <tr>
                        <td>Tempat Acara</td>
                        <td>
                            <input type="text" name="place" id="" value="<?=$listAcara['tempat']?>" >
                        </td>
                    </tr>
                    <tr>
                        <td>Link Halaman</td>
                        <td><input type="text" name="linkPage" id="" value="<?=$listAcara['link_halaman'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Kategori Acara</td>
                        <td>
                        <input type="text" name="kategori" id="" value="<?=$listAcara['kategori'] ?>" >
                        </td>
                    </tr>
                    <tr>
                        <td>Tag Acara</td>
                        <td><input type="text" name="eventTag" id="" value="<?=$listAcara['tag'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Acara Jurusan</td>
                        <td>
                            <select name="jurusan" id="jurusan">
                                <?php
                                    foreach ($arrJurusan as $key => $value) {
                                        if($value == $listAcara['jurusan']){
                                            ?>
                                                <option value="<?=$value?>" selected><?=$value?></option>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <option value="<?=$value?>"><?=$value?></option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button name="btnSend" value="<?=$listAcara['id_acara']?>">Kirim</button></td>
                    </tr>
                </table>
            </form>
            <br>
        </div>
    </div>
</body>
</html>