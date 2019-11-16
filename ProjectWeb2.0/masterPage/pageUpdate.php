<?php
    require_once("config.php");
?>

<div class="inputan" style="display: table-row;">
    <span class="h1">Halaman Edit Acara</span> <br> <br>
    <div class="table"></div>
<pre>
<span class="h5">bukan yang ada anda cari?</span>    <input type="text" name="eventName" id="" placeholder="Judul Acara"> <button id="btnSearch">Cari</button>
</pre>
</div>
<div class="result" style="display: table-row;"></div>

<script src="jquery3.4.js"></script>
<script src="search.js"></script>
<script>
    getTable();
    setInterval(() => {
        getTable();
    }, 1000);
    function getTable(){
        $.ajax({
            method: "get",
            url: "tableTop5.php",
            success: function (response) {
                $(".table").html(response);
            }
        });
    }
</script>