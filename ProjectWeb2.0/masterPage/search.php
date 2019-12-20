<?php
    require_once("config.php");

    $bahasa=$_SESSION["bahasa"];
    $judul = $_POST['judul'];
    $query = "SELECT * FROM acara WHERE judul_".$bahasa." LIKE '%$judul%'";
    $acara = $conn->query($query);
    
    if($acara->num_rows >0){
        ?>
        <form action="updateEvent.php" method="post">
            <table border="1">
                <thead>
                    <tr>
                        <td>Judul Acara</td>
                        <td>Deskripsi Acara</td>
                        <td>Jurusan Acara</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($acara as $key => $value) {
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
                                    <td style="color: blue;">
                                        <button type="submit" value="<?=$value['id_acara']?>" class="btnUpdate" name="id">Update</button>
                                        <button type="submit" value="<?=$value['id_acara']?>" class="btnDelete" name="del">Delete</button>
                                    </td>
                                    <td></td>
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </form>
           
        <?php
        
    }
    else{
        ?>
            <span class="h1">Tidak ketemu</span>
        <?php
    }
?>
<script src="jquery3.4.js"></script>
<script>
    $(".btnDelete").click(function (e) { 
        $.ajax({
            method: "post",
            url: "deleteEvent.php",
            data:{
                id: $(this).val()
            },
            success: function (response) {
                $(".result").html("");
            }
        });
    });
</script>
