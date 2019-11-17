<?php
    require("config.php");
?>
<link rel="stylesheet" href="Dosen/style.css">
<span class="h1">Update Dosen</span> <br> <br>
<span class="h6">Cari Dosen</span> <br> <br>
<input type="text" name="searchName" id="" placeholder="Co: pak Agus"> <button class="btnSearch">Cari</button>
<div class="result"></div>
<script src="jquery3.4.js"></script>
<script>
    $(".btnSearch").click(function (e) { 
        $.ajax({
            method: "post",
            url: "Dosen/search.php",
            data:{
                nama: $("input[name=searchName]").val()
            },
            success: function (response) {
                $(".result").html(response);
            }
        });
    });
</script>