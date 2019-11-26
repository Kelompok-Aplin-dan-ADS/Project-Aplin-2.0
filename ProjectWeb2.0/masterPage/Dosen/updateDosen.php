<?php
    require("config.php");
    
    $nip = $_POST['nip'];
    if(isset($_POST['btnAdd'])){
        $fileName = $_FILES['imgDesc']['name'];
        $fileTmp = $_FILES['imgDesc']['tmp_name'];

        $fileDestination = "..//assets//images//".$fileName;
        move_uploaded_file($fileTmp,$fileDestination);
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        
        $email = $_POST['email'];
        $jabatan = $_POST['jabatan'];
        $quotes = $_POST['quotes'];

        $query = "UPDATE dosen SET nama='$nama',gambar='$fileDestination',email='$email',jabatan='$jabatan',quotes='$quotes' WHERE nip='$nip'";
        $conn->query($query);
    }
    else{
        $nip = $_POST['nip'];
        $query = "SELECT * FROM dosen WHERE nip='$nip'";
        $temp = $conn->query($query);
        $dosenNow = mysqli_fetch_assoc($temp);
    }
    
?>
<form action="Dosen\updateDosenDB.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="" value="<?=$dosenNow['nama']?>"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td><input type="file" name="imgDesc" id=""></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="" value="<?=$dosenNow['email']?>"></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td><input type="text" name="jabatan" id="" value="<?=$dosenNow['jabatan']?>"></td>
        </tr>
        <tr>
            <td>Quotes</td>
            <td>
                <textarea name="quotes" id="" cols="30" rows="10"><?=$dosenNow['quotes']?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="btnAdd" value="<?=$nip?>">Update</button></td>
        </tr>
    </table>
</form>
