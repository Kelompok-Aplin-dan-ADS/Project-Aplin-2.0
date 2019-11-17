<?php
    require("config.php");
?>
<h1>Update Mata Kuliah</h1> <br>
<span class="h6">Cari Mata Kuliah</span>&nbsp; &nbsp;
<input type="text" name="searchVal" id="" placeholder="Co: Sistem Digital">
<button class="btnSearch">Cari</button> <br>
<div class="result"></div>
<script src="jquery3.4.js"></script>
<script>
    $(".btnSearch").click(function (e) { 
        $.ajax({
            method: "post",
            url: "mataKuliah/search.php",
            data: {
                name: $("input[name=searchVal]").val()
            },
            success: function (response) {
                $(".result").html(response);
            }
        });
    });
</script>
