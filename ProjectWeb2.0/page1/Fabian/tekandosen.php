<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
<?php
    include_once("..//connection.php");
    $id=$_POST["id"];
    $dosenTampil=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from dosen where nip=$id"));
    session_start();
    $bahasa=$_SESSION["bahasa"];
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
            <span class="font-15"><?=$dosenTampil["jabatan_".$bahasa]?></span><br>
            <span class="font-15"><?=$dosenTampil["email"]?></span><br>
            <span class="font-15 font-italic"><?=$dosenTampil["quotes"]?></span><br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary tutup" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
<script src="../bootstrap4/js/js.js"></script>
<script src="../bootstrap4/js/proper.js"></script>
<script src="../bootstrap4/js/bootstrap.min.js"></script>
