<?php
    require("config.php");

    $arrJurusan = [];
    $arrJurusan[0] = "S1-Informatika";
    $arrJurusan[1] = "S1-DKV";
    $arrJurusan[2] = "S1-SIB";
    $arrJurusan[3] = "S1-Elektro";
    $arrJurusan[4] = "S1-Industri";
    $arrJurusan[5] = "D3-Informatika";

    
    
?>
<h1>Tambah Mata Kuliah Baru</h1> <br>
<form action="" method="post">
    
</form>
<table>
    <tr>
        <td>Kode Mata kuliah</td>
        <td><input type="text" name="kode" id="" placeholder="Co: INF301" required></td>
    </tr>
    <tr>
        <td>Nama Dosen Pengajar</td>
        <td>
            <select name="dosenName" id="">
                <?php
                    $query = "SELECT * FROM dosen";
                    $listDosen = $conn->query($query);
                    foreach ($listDosen as $key => $value) {
                        ?>
                            <option value="<?=$value['nama']?>"><?=$value['nama']?></option>
                        <?php
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Nama Mata Kuliah Baru</td>
        <td><input type="text" name="newMat" id="" placeholder="Co: Pemprograman Web" required></td>
    </tr>
    <tr>
        <td>Jurusan</td>
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
        <td></td>
        <td><input type="submit" name="btnAdd" value="Kirim"></td>
    </tr>
</table>
<script src="jquery3.4.js"></script>
<script>
    var idDosen;
    $("input[name=btnAdd]").click(function (e) { 
        $.ajax({
            method: "post",
            url: "mataKuliah/get_id_dosen.php",
            data: {
                dosenName: $("select[name=dosenName]").val()
            },
            success: function (response) {
                idDosen = response;
                insert();
            }
        });
    });

    function insert() {
        $.ajax({
            method: "post",
            url: "mataKuliah/input.php",
            data:{
                id_matkul: $("input[name=kode]").val(),
                nipDosen: idDosen,
                nama_mata_kuliah: $("input[name=newMat]").val(),
                jurusan: $("select[name=jurusan]").val(),
            },
            success: function (response) {
                $("input[type=text]").val("");
            }
        });
    }
</script>
