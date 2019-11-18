<?php
    require("config.php");
    $nip = $_POST['nip'];
    $query = "SELECT * FROM dosen WHERE nip='$nip'";
    $temp = $conn->query($query);
    $dosenNow = mysqli_fetch_assoc($temp);
?>
<table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" id="" value="<?=$dosenNow['nama']?>"></td>
    </tr>
    <tr>
        <td>Gambar</td>
        <td><button>Pilih</button> <span id="imgDesc"><?=$dosenNow['gambar']?></span></td>
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
        <td><input type="submit" name="btnAdd" value="Update" id=""></td>
    </tr>
</table>

<script>
    $("input[name=btnAdd]").click(function (e) { 
        console.log("test");
        
        $.ajax({
            method: "post",
            url: "Dosen/updateDosenDB.php",
            data: {
                nip: <?=$nip?>,
                nama: $("input[name=nama]").val(),
                gambar: $("input[name=gambar]").val(),
                email: $("input[name=email]").val(),
                jabatan: $("input[name=jabatan]").val(),
                quotes: $("textarea[name=quotes]").val()
            },
            success: function (response) {
              alert("data berhasil di update");
            }
        });
    });
</script>