<link rel="stylesheet" href="Fabian/css/font-awesome.min.css"/>
<link rel="stylesheet" href="Fabian/css/flaticon.css"/>
<link rel="stylesheet" href="Fabian/css/animate.css"/>
<link rel="stylesheet" href="Fabian/css/owl.carousel.css"/>
<link rel="stylesheet" href="Fabian/css/style.css"/>
<link rel="stylesheet" href="Fabian/fab.css"/>
<div style="position:relative">
<div id="preloder">
    <div class="loader"></div>
</div>
<?php
    include_once("connection.php");
    $semuaAcara=mysqli_query($conn,"SELECT * from acara");
    $tamp=[];
    $jum=0;
    foreach ($semuaAcara as $key => $value) {
        $tamp[$jum]=$value;
        $jum++;
    }

    $acara=[];
    for ($i=0; $i < 3; $i++) { 
        $ran=rand(0,9-$i);
        $acara[$i]=$tamp[$ran];
        array_splice($tamp,$ran,1);
    }
?>
<!-- Header section start -->
<img src="../assets/logo-stts.png" class="logo-stts-caur">
<header class="header-section sp-pad">
    
    <form class="search-top">
        <button class="se-btn"><i class="fa fa-search"></i></button>
        <input type="text" placeholder="Search.....">
    </form>
    <div class="nav-switch">
        <i class="fa fa-bars"></i>
    </div>
    <nav class="main-menu">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">about us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</header>
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <!-- <div class="hs-item set-bg sp-pad" data-setbg="../assets/gambar.jpg">
            <div class="hs-text">
                <h2 class="hs-title">Halo</h2>
                <p class="hs-des">We Create Awesome <br>Photographies and more</p>
            </div>
        </div>
        <div class="hs-item set-bg sp-pad" data-setbg="../assets/gambar.jpg">
            <div class="hs-text">
                <h2 class="hs-title">Halo</h2>
                <p class="hs-des">We Create Awesome <br>Photographies and more</p>
            </div>
        </div>
        <div class="hs-item set-bg sp-pad" data-setbg="../assets/gambar.jpg">
            <div class="hs-text">
                <h2 class="hs-title">Halo</h2>
                <p class="hs-des">We Create Awesome <br>Photographies and more</p>
            </div>
        </div> -->
        <?php
            foreach ($acara as $key => $value) {
                echo "<div class='hs-item set-bg sp-pad' data-setbg=$value[gambar]>
                <div class='hs-text'>
                    <h2 class='hs-title'>$value[judul]</h2>
                </div>
            </div>";
            }
        ?>
    </div>
</section>

</div>

<script src="Fabian/js/jquery-3.2.1.min.js"></script>
<script src="Fabian/js/bootstrap.min.js"></script>
<script src="Fabian/js/owl.carousel.min.js"></script>
<script src="Fabian/js/mixitup.min.js"></script>
<script src="Fabian/js/circle-progress.min.js"></script>
<script src="Fabian/js/main.js"></script>