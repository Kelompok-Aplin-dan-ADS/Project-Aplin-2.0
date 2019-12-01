<?php
    require("config.php");
    $nip = $_POST['nip'];
    $query = "SELECT * FROM dosen WHERE nip = $nip";
    $temp = $conn->query($query);
    $dosenTampil = mysqli_fetch_assoc($temp);
?>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><?=$dosenTampil["nama"]?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <span class="font-15"><?=$dosenTampil["jabatan"]?></span><br>
            <span class="font-15"><?=$dosenTampil["email"]?></span><br>
            <span class="font-15 font-italic"><?=$dosenTampil["quotes"]?></span><br> <br>
            <button type="button" class="btn btn-secondary tutup update">Update</button>
            <button type="button" class="btn btn-secondary tutup delete">Delete</button>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary tutup" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
<script>
    $(".update").click(function (e) { 
        $.ajax({
            method: "post",
            url: "Dosen/updateDosen.php",
            data: {
                nip : <?=$nip?>
            },
            success: function (response) {
                $(".modal-body").html(response);
            }
        });
    });
    $(".delete").click(function (e) { 
        $.ajax({
            method: "post",
            url: "Dosen/deleteDosen.php",
            data:{
                nip: <?=$nip?>
            },
            success: function (response) {
                alert("dosen telah di delete");
                $("#exampleModalCenter").modal("hide");
            }
        });
        
    });
</script>