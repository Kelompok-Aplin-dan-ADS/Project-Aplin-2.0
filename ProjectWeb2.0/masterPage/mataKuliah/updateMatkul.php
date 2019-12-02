<?php
    require("config.php");

    $arrJurusan = [];
    $arrJurusan[0] = "S1-Informatika";
    $arrJurusan[1] = "S1-DKV";
    $arrJurusan[2] = "S1-SIB";
    $arrJurusan[3] = "S1-Elektro";
    $arrJurusan[4] = "S1-Industri";
    $arrJurusan[5] = "D3-Informatika";

    $id_matkul = $_POST['id_matkul'];
    $query = "SELECT * FROM mata_kuliah WHERE id_matkul = '$id_matkul'";
    $temp = $conn->query($query);
    $matkul = mysqli_fetch_assoc($temp);
?>
<br>
<table>
    <tr>
        <td>Kode Mata kuliah</td>
        <td><input type="text" name="kode" id="" value="<?=$matkul['id_matkul']?>" required></td>
    </tr>
    <tr>
        <td>Nama Mata Kuliah Baru</td>
        <td><input type="text" name="newMat" id="" value="<?=$matkul['nama_mata_kuliah']?>" required></td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td>
            <textarea name="desc" id="desc" cols="30" rows="4"><?=$matkul['deskripsi']?></textarea>
        </td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>
            <select name="jurusan" id="jurusan">
                <?php
                    foreach ($arrJurusan as $key => $value) {
                        if($value == $matkul['jurusan']){
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
        <td></td>
        <td><input type="submit" name="btnAdd" value="Kirim"></td>
    </tr>
</table>
<script src="jquery3.4.js"></script>
<script>
    $("input[name=btnAdd]").click(function (e) { 
        $.ajax({
            method: "post",
            url: "mataKuliah/updateDb.php",
            data: {
                id_matkul : $("input[name=kode]").val(),
                nama_mata_kuliah : $("input[name=newMat]").val(),
                jurusan : $("select[name=jurusan]").val(),
                desc: $("#desc").val()
            },
            success: function (response) {
                alert("terupdate");
            }
        });
    });
</script>