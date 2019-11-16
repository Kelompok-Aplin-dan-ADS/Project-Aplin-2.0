<?php
    require_once("config.php");

    if(isset($_POST['btnSend'])){
        $judul = $_POST['judul'];
        $gambar = "temp gambar";
        $desc = $_POST['textEvent'];
        $waktu = $_POST['waktuAcara'];
        $tempat = $_POST['place'];
        $link = "temp link";
        $tag = $_POST['eventTag'];
        $kategori = $_POST['kategori'];
        $jurusan = $_POST['jurusan'];

        $query = "INSERT INTO acara VALUES('','$gambar','$judul','$desc','$waktu','$tempat','$link','$tag','$kategori','$jurusan')";
        $conn->query($query);
    }
    
?>
<form action="#" method="post">
    <div class="inputan" style="display: table-row;">
    <span class="h1">Halaman Masukan Acara Baru</span> <br> <br>
    <table>
        <tr>
            <td>Judul Acara: </td>
            <td><input type="text" name="judul" id="" class="" placeholder="Co: pekan kampus"></td>
        </tr>
        <tr>
            <td>Gambar Acara: </td>
            <td><Button>Pilih</Button><span>blabla.png</span></td>
            
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
            <td><input type="url" name="linkPage" id=""></td>
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
</form>
