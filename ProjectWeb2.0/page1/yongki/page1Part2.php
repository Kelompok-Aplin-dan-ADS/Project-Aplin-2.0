<link rel="stylesheet" href="yongki/stylePage1Part2.css">
<?php include("fabian//yongki_Page1.php")?>
<div class="container" id="page1_yong">
    <div class="col-bootstrap col-md-6" style="float:left;">
        <div class="whySTTS">WHY STTS</div>
        <p class="section-title text-danger h1" style="margin-top:100px;">
            Pursue Your Passion & Purpose Here<span class="text-primary">.</span>
        </p>
        <span>#STTSIMPACTSLIVES</span> <br> <br>

        <div class="card hoverCard rounded" style="max-width: 450px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?=$tampilCard[0]["gambar"]?>" class="card-img-top h-100" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <span class="card-title text-primary"><?=$tampilCard[0]["judul"]?></span>
                        <p class="card-text"><?=$tampilCard[0]["desc"]?></p>
                        <a href="card-link">-READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card hoverCard rounded card-gedung">
            <img src="<?=$tampilCard[1]["gambar"]?>" style="height:400px;z-index:0"alt=""> 
            <div class="images-wrapper">
                <div class="card-image "></div>
            </div>
            <div class="card-content" style="margin-top:-80px; margin-left:25px;z-index:1">
                <h5 class="card-subtitle fontSubtitle"><?=$tampilCard[0]["judul"]?></h5>
                <h4 class="card-title text-white"><?=$tampilCard[0]["desc"]?></h4>
            </div>
        </div>
    </div>

    <div class="col-bootstrap col-md-5" style="float:left; margin-top:100px;">
        <img src="<?=$tampilCard[2]["gambar"]?>" class="hoverCard" style="width:450px; height:300px; "alt="">
        <br> <br>
        <div class="card hoverCard" style="max-width: 450px;">
            <div class="row no-gutters card-img-right">
                <div class="col-md-5">
                    <img src="<?=$tampilCard[3]["gambar"]?>" class="card-img-top h-100" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <span class="card-title text-primary"><?=$tampilCard[3]["judul"]?></span>
                        <p class="card-text"><?=$tampilCard[3]["desc"]?></p>
                        <a href="card-link">-READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="card hoverCard" style="max-width: 450px;">
            <div class="row no-gutters card-img-right">
                <div class="col-md-5">
                    <img src="<?=$tampilCard[4]["gambar"]?>" class="card-img-top h-100" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <span class="card-title text-primary"><?=$tampilCard[4]["judul"]?></span>
                        <p class="card-text"><?=$tampilCard[4]["desc"]?></p>
                        <a href="card-link">-READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>
