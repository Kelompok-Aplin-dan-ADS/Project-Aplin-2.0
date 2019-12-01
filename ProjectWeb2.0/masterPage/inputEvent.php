<?php
    require_once("config.php");
?>
<div class="inputan" style="display: table-row;">
<span class="h1">Halaman Masukan Acara Baru</span> <br> <br>
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
<br>

</div>
<script src="jquery3.4.js"></script>
<script>
    $("input[name=btnSend]").click(function (e) { 
        let gambar = $("input[name=imgFile]").val();
        console.log(gambar);
        
        $.ajax({
            method: "post",
            url: "insert.php",
            data: {
                judul : $("input[name=judul]").val(),
                gambar : gambar,
                textEvent : $("textarea[name=textEvent]").val(),
                waktuAcara : $("input[name=waktuAcara]").val(),
                place : $("input[name=place]").val(),
                link : "temp link",
                eventTag : $("input[name=eventTag]").val(),
                jurusan : $("select[name=jurusan]").val(),
            },
            success: function (response) {
                $("input[type=text]").val("");
                $("input[type=date]").val("");
                $("textarea").val("");
                alert("berhasil tambahkan event");
            }
        });
    });
</script>