<?php
    require("config.php");

    $name = $_POST['name'];

    $query = "SELECT * FROM mata_kuliah WHERE nama_mata_kuliah LIKE '%$name%'";
    $matKul = $conn->query($query);

    if($matKul->num_rows >0){
        ?>
            <table border="1">
                <thead>
                    <tr>
                        <td>Kode Matkul</td>
                        <td>Nama Mata Kuliah</td>
                        <td>Jurusan</td>
                        <td>Deskripsi</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($matKul as $key => $value) {
                            ?>
                                <tr>
                                    <td><?=$value['id_matkul']?></td>
                                    <td><?=$value['nama_mata_kuliah']?></td>
                                    <td><?=$value['jurusan']?></td>
                                    <td><?=$value['deskripsi']?></td>
                                    <td>
                                        <button class="update" value="<?=$value['id_matkul']?>">Update</button>
                                        <button class="delete" value="<?=$value['id_matkul']?>">Delete</button>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        <?php
    }
    else{
        echo "<span class=h2>Tidak ada</span>";
    }
?>
<script src="jquery3.4.js"></script>
<script>
    $(".update").click(function (e) { 
        $.ajax({
            method: "post",
            url: "mataKuliah/updateMatkul.php",
            data: {
                id_matkul : $(this).val(),
            },
            success: function (response) {
                $(".result").html(response);
            }
        });
    });
    $(".delete").click(function (e) { 
        $.ajax({
            method: "post",
            url: "mataKuliah/delete.php",
            data: {
                id_matkul : $(this).val()
            },
            success: function (response) {
                $(".result").html(response);
            }
        });
        
    });

</script>
