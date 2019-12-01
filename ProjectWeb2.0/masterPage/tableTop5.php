<?php
    require_once("config.php");
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
                $miniDesc = $value['deskripsi'];
                $miniDesc = substr($miniDesc,0,25)."...";
                ?>
                    <tr>
                        <td><?=$value['judul']?></td>
                        <td><?=$miniDesc?></td>
                        <td><?=$value['jurusan']?></td>

                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>
<br>