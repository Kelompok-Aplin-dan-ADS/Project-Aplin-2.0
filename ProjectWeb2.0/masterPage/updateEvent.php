<?php
    require_once("config.php");

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



?>
<div class="update">
    <table>
        <tr>
            <td>Judul Acara: </td>
            <td><input type="text" name="judul" id="" class="" value="<?= $listAcara['judul'] ?>"></td>
        </tr>
        <tr>
            <td>Gambar Acara: </td>
            <td><Button>Pilih</Button><span>blabla.png</span></td>
            
        </tr>
        <tr>
            <td>Deskripsi  Acara: </td>
            <td>
                <textarea name="textEvent" id="text-Area" cols="30" rows="10"><?php echo $listAcara['deskripsi'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Waktu Acara</td>
            <td><input type="date" name="waktuAcara" id=""></td>
        </tr>
        <tr>
            <td>Tempat Acara</td>
            <td>
                <input type="text" name="place" id="" value="<?=$listAcara['tempat']?>" >
            </td>
        </tr>
        <tr>
            <td>Link Halaman</td>
            <td><input type="url" name="linkPage" id="" value="<?=$listAcara['link_halaman'] ?>"></td>
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
    <br>
</div>
<script src="jquery3.4.js"></script>
<script>
    $("button[name=btnSend]").click(function (e) { 
        $.ajax({
            method: "post",
            url: "updateEventDb.php",
            data: {
                id: $(this).val(),
                judul : $("input[name=judul]").val(),
                gambar : "temp gambar",
                desc : $("#text-Area").val(),
                waktu : $("input[name=waktuAcara]").val(),
                link: $("input[name=linkPage]").val(),
                tag : $("input[name=eventTag]").val(),
                kategori : $("input[name=kategori]").val(),
                jurusan : $("#jurusan").val(),
                tempat : $("input[name=place]").val()
            },
            success: function (response) {
                alert("berhasil update acara");
                $(".result").html("");
                $("input[name=eventName]").val("");
            }
        });
        
        
    });
</script>