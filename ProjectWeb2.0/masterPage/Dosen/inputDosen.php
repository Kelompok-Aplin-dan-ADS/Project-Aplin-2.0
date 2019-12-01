<?php
    require_once("config.php");

?>
<span class="h1">Tambah Dosen Baru</span> <br>

<table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" id=""></td>
    </tr>
    <tr>
        <td>Gambar</td>
        <td><button>Pilih</button> <span id="imgDesc">bla.png</span></td>
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
<script src="jquery3.4.js"></script>
<script>
    $("input[name=btnAdd]").click(function (e) { 
        $.ajax({
            method: "post",
            url: "Dosen/input.php",
            data:{
                nama: $("input[name=nama]").val(),
                email: $("input[name=email]").val(),
                jabatan: $("input[name=jabatan]").val(),
                gambar: "tempGambar",
                quotes: $("textarea[name=quotes]").val(),
            },
            success: function (response) {
                $("input[type=text]").val("");
                $("input[type=email]").val("");
                $("textarea[name=quotes]").val("");
                alert("berhasil tambahkan dosen");
            }
        });
    });
</script>

