<?php
    require_once("config.php");
    $bahasa=$_SESSION["bahasa"];
?>
<table border="1">
    <thead>
        <tr>
            <td>Judul Acara</td>
            <td>Deskripsi Acara</td>
            <td>Jurusan Acara</td>
        </tr>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM acara ORDER BY id_acara DESC LIMIT 5";
            echo "<span class='h4'>5 acara terbaru yang ditambahkan</span>";
            $listAcara = $conn->query($query);
            foreach ($listAcara as $key => $value) {
                $miniDesc = $value['deskripsi_'.$bahasa];
                $miniDesc = substr($miniDesc,0,25)."...";

                $query = "SELECT * FROM jurusan_bahasa WHERE jurusan_id = '$value[jurusan]'";
                $temp = $conn2->query($query);
                $namaJurusan = mysqli_fetch_assoc($temp);
                ?>
                    <tr>
                        <td><?=$value['judul_'.$bahasa]?></td>
                        <td><?=$miniDesc?></td>
                        <td><?=$namaJurusan['jurusan_nama']?></td>

                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>
<br>