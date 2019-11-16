<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    <style>
        .kotakMain{
            padding:10px;
            margin:15px;
            border:1px solid black;
            height:125px;
            width:30%;
            float:left;
            box-sizing:border-box;
        }
        .Mid{
            margin-left:5%;
        }
        .DosenImg{
            width:100px;
            border-radius:50%;
            float:left;
        }
        .DosenText{
            margin:10px;
            margin-right:0px;
        }
        .DosenText span{
            margin-left:20px;
        }
        .kotakMain:hover {
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        .font-15{
            font-size:15px
        }
    </style>
</head>
<body onclick="tutup()">
    <?php include('fabian/navbar.php') ?>
    <?php 
        include("connection.php");
        $orang=mysqli_query($conn,"SELECT * from dosen");
    ?>
    <div class="Mid">
        <?php
            foreach ($orang as $key => $value) {
                echo "
                <div class='kotakMain shadow bg-white' onclick='tekan($value[nip])'>
                    <img src='$value[gambar]' class='DosenImg'>
                    <div class='DosenText'>
                        <span style='font-size:13px'>$value[nama]</span><br>
                        <span style='font-size:15px'>$value[jabatan]</span><br>
                        <span style='font-size:10px'>$value[email]</span>
                    </div>
                </div>
                ";
            }
        ?>
        <div class="tempat"></div>
    </div>
    <?php include('fabian/footer.php') ?>
</body>
</html>
<script src="../bootstrap4/js/js.js"></script>
<script src="../bootstrap4/js/proper.js"></script>
<script src="../bootstrap4/js/bootstrap.min.js"></script>
<script>
    function tekan(id){
        $.ajax({
            method: "post",
            url: "fabian//tekandosen.php",
            data:{
                id:id
            },
            success: function (data) {
                $(".tempat").html(data);
                $("#exampleModalCenter").modal("show");
                
            }
        });
    }
    
</script>