<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <style>
        body{
            
        }
        .bold{
            font-weight: bold;
        }
        .kiri{
            width:15%;
            height:500px;
            background-color: white;
            margin-left:60px;
            margin-top:50px;
            float:left;
        }
        .tengahh{
            width:70%;
            height:100%;
            background-color: white;
            margin-left:10px;
            margin-top:50px;
            float:left;
            padding-top:30px;
        }
        .kiri-atas{
            font-weight: bold;
            padding-left:30%;
        }
        .detail1,.detail2{
            padding:10px;
            border-radius:5%;
            box-sizing:border-box;    
            display: table;
            margin-right:10px;
        }
        .ajaxnya{
            list-style: none;
            margin:0px 20px;
        }
        .ajaxnya li{
            float: left;
            
        }
        .aktif{
            background-color:brown;
            color:white;
        }
    
        .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
            border: 1px solid #ddd;
        }
        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd;
        }
        table {
            border-spacing: 0;
            border-collapse: collapse;
        }
        .content{
            padding:30px;
        }
        .deli{
            text-align:center;
        }
        .deli:hover{
            text-decoration:underline;
        }
    </style>

</head>
<body style="background-color:grey;">
<?php include('fabian/navbar.php') ?>
    <div class="kiri" >
        <div class="kiri-atas">AKADEMI</div>
        <div>
        
        <div class='deli'>
        <h5>DIPLOMA 3</h5>
            <span onclick='panggilAkademik(1)'>D3 Sistem Informasi</span>
        </div>
        <br>
        <div class="deli">
            <h5>STRATA 1</h5>
        </div>
        <?php
        
            include("connection.php");
            $jurusan=mysqli_query($connStts,"SELECT * from jurusan_bahasa where jurusan_id<>2 AND jurusan_id<>1 order by jurusan_id asc ");
            foreach ($jurusan as $key => $value) {
                echo "
                    <div class='deli'>
                        <span onclick='panggilAkademik($value[jurusan_id])'>$value[jurusan_nama]</span> 
                    </div>
                ";
            }

        ?><br>
        
        <div class='deli'><h5>Program Internasional</h5>
            <span onclick='panggilAkademik(2)'>Bachelor of Information Technology</span> 
        </div><br>

        </div>
    </div>
    <div class="tengahh">
        <ul class="ajaxnya">
            <li class="detail1 aktif" onclick="detail()">Tentang Jurusan</li>
            <li class="detail2" onclick="matakuliah()" >Mata Kuliah</li>
        </ul>
        <div class="delimiter" style="
            clear:both;
            border-bottom: 1px solid #ddd;
            margin:0px 20px;
            "></div>
        <div class="content">
            
        </div>
    </div>
    <input type="hidden" id="hidden" value="14">
</body>
</html>
<script src="../bootstrap4/js/js.js"></script>
<script src="../bootstrap4/js/proper.js"></script>
<script src="../bootstrap4/js/bootstrap.min.js"></script>
<script>
    $(".akademik").addClass("active");
    $(".akademik").addClass("text-white");
    $(".akademik").removeClass("text-dark");
    panggilAkademik(14);
    function panggilAkademik(index){
        $("#hidden").val(index);
        $.ajax({
            method: "post",
            url: "fabian//akademikAjax.php",
            data: {
                id:index
            },
            success: function (data) {
                $(".content").html(data);
            }
        });
    }
    function matakuliah(){
        $(".detail2").addClass("aktif");
        $(".detail1").removeClass("aktif");
        $.ajax({
            method: "post",
            url: "fabian//akademik_matakuliah_ajax.php",
            data: {
                id:$("#hidden").val()
            },
            success: function (data) {
                $(".content").html(data);
            }
        });
    }
    function detail(){
        $(".detail1").addClass("aktif");
        $(".detail2").removeClass("aktif");
        $.ajax({
            method: "post",
            url: "fabian//akademikAjax.php",
            data: {
                id:$("#hidden").val()
            },
            success: function (data) {
                $(".content").html(data);
            }
        });
    }
</script>
    
    
    
    
    












