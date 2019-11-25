<?php
    require_once("config.php");

    $judul = $_POST['judul'];
    $query = "SELECT * FROM acara WHERE judul LIKE '%$judul%'";
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
                            $miniDesc = $value['deskripsi'];
                            $miniDesc = substr($miniDesc,0,25)."...";
                            ?>
                                <tr>
                                    <td><?=$value['judul']?></td>
                                    <td><?=$miniDesc?></td>
                                    <td><?=$value['jurusan']?></td>
                                    <td>
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
