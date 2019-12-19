<?php
    $conn=mysqli_connect("localhost","root","","project-aplin-2.0");
    $kata=$_GET["kata"];
?>
<link rel="stylesheet" href="fabian/search/css/bootstrap.css">
<link rel="stylesheet" href="fabian/search/css/main.css">
<?php
    include("fabian/navbar.php");
    
?>


<section class="featured-area">
    <div class="container">
<input type='text' id='search_tempat'>
<button onclick='keCari()'>Search</button>
        <div class="row" id="tempat">
            
            
        </div>
    </div>
</section>

<?php
include("../footer.php");
?>
<script src="../bootstrap4/js/js.js"></script>
<script>
    var kata="<?php echo $kata?>";
    $("#search_tempat").val(kata);
    keCari();
    function keCari(){
        var kata=$("#search_tempat").val();
        $.ajax({
            method: "post",
            url: "cari_ajax.php",
            data: {
                kata:kata
            },
            success: function (response) {
                $("#tempat").html(response);
            }
        });
    }
</script>