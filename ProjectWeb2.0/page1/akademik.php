<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color:grey;
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
        .tengah{
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
        
    </style>
</head>
<body>
    <div class="kiri" >
        <div class="kiri-atas">AKADEMI</div>
    </div>
    <div class="tengah">
        <ul class="ajaxnya">
            <li class="detail1 aktif">Tentang Jurusan</li>
            <li class="detail2">Mata Kuliah</li>
        </ul>
        <div class="delimiter" style="
            clear:both;
            border-bottom: 1px solid #ddd;
            margin:0px 20px;
            "></div>
        <div class="content">
            
        </div>
    </div>
</body>
</html>
<script src="../bootstrap4/js/js.js"></script>
<script src="../bootstrap4/js/proper.js"></script>
<script src="../bootstrap4/js/bootstrap.min.js"></script>
<script>
    panggilAkademik(14);
    function panggilAkademik(index){
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
</script>
    
    
    
    
    












