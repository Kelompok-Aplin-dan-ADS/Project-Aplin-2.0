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
            width:27%;
            float:left;
            box-sizing:border-box;
        }
        .Mid{
            margin-left:11%;
        }
        .DosenImg{
            width:100px;
            border-radius:50%;
            float:left
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
    </style>
</head>
<body>
    <?php include('fabian/navbar.php') ?>
    <div class="Mid">
        <div class="kotakMain shadow bg-white" data-toggle="modal" data-target="#exampleModalCenter">
            <img src="..//assets//card4.jpg" class="DosenImg">
            <div class="DosenText">
                <span>Yongki Tanu.SPM</span>
                <span style="font-size:15px">Pengangguran</span>
                <span style="font-size:10px">yongkiYimyam@gmail.com</span>
            </div>
        </div>
        <div class="kotakMain">
            <img src="..//assets//card4.jpg" class="DosenImg">
            <div class="DosenText">
                <span>Yongki Tanu.SPM</span>
                <span style="font-size:15px">Pengangguran</span>
                <span style="font-size:10px">yongkiYimyam@gmail.com</span>
                
            </div>
        </div>
        <div class="kotakMain">
            <img src="..//assets//card4.jpg" class="DosenImg">
            <div class="DosenText">
                <span>Yongki Tanu.SPM</span>
                <span style="font-size:15px">Pengangguran</span>
                <span style="font-size:10px">yongkiYimyam@gmail.com</span>
            </div>
        </div>
        <div class="kotakMain">
            <img src="..//assets//card4.jpg" class="DosenImg">
            <div class="DosenText">
                <span>Yongki Tanu.SPM</span>
                <span style="font-size:15px">Pengangguran</span>
                <span style="font-size:10px">yongkiYimyam@gmail.com</span>
            </div>
        </div>
        <div class="kotakMain">
            <img src="..//assets//card4.jpg" class="DosenImg">
            <div class="DosenText">
                <span>Yongki Tanu.SPM</span>
                <span style="font-size:15px">Pengangguran</span>
                <span style="font-size:10px">yongkiYimyam@gmail.com</span>
            </div>
        </div>
        <div class="kotakMain">
            <img src="..//assets//card4.jpg" class="DosenImg">
            <div class="DosenText">
                <span>Yongki Tanu.SPM</span>
                <span style="font-size:15px">Pengangguran</span>
                <span style="font-size:10px">yongkiYimyam@gmail.com</span>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Yongki Tanu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span style="font-size:15px">yongkiYimyam@gmail.com</span><br>
                <select name="">
                    <option value="">Pengangguran</option>
                    <option value="">Kurang Kerjaan</option>
                    <option value="">Kucing oren</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <?php include('fabian/footer.php') ?>
</body>
</html>
<script src="../bootstrap4/js/js.js"></script>
    <script src="../bootstrap4/js/proper.js"></script>
    <script src="../bootstrap4/js/bootstrap.min.js"></script>