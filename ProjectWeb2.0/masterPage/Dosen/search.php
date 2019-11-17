<?php
    require("config.php");
    $nama = $_POST['nama'];
    $query = "SELECT * FROM dosen WHERE nama LIKE '%$nama%'";
    $dosen = $conn->query($query);

    if($dosen->num_rows >0){
        foreach ($dosen as $key => $value) {
            echo "
            <div class='kotakMain shadow bg-white' onclick='getMore($value[nip])'>
                <img src='$value[gambar]' class='DosenImg'>
                <div class='DosenText'>
                    <span style='font-size:13px'>$value[nama]</span><br>
                    <span style='font-size:15px'>$value[jabatan]</span><br>
                    <span style='font-size:10px'>$value[email]</span>
                </div>
            </div>
            ";
            ?>
                <div class="pop"></div>
            <?php
        }
    }
    else{
        ?>
            <span class="h1">Tidak ada</span>
        <?php
    }
?>
<script src="jquery3.4.js"></script>
<script src="../bootstrap4/js/js.js"></script>
<script src="../bootstrap4/js/proper.js"></script>
<script src="../bootstrap4/js/bootstrap.min.js"></script>
<script>
    function getMore(nip) {
        $.ajax({
            type: "post",
            url: "Dosen/more.php",
            data: {
                nip:nip
            },
            success: function (response) {
                $(".pop").html(response);
                $("#exampleModalCenter").modal("show");
            }
        });
    }
</script>