
<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
<!-- Gallery Lightbox -->
<link href="assets/css/magnific-popup.css" rel="stylesheet">
<!-- Theme color -->
<link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

<!-- Main Style -->
<link href="style.css" rel="stylesheet">
<!-- Fonts -->
<?php 
include("fabian/navbar.php");
    $bahasa = $_SESSION['bahasa'];
    $bem=mysqli_fetch_assoc(mysqli_query($connStts,"SELECT * from org_bahasa where org_bahasa_id=1"));
    $judul=mysqli_fetch_assoc(mysqli_query($connStts,"SELECT * from org_bahasa where org_bahasa_id=27"));
    
?>

<section style="background:#fafafa;">
    <div class="container">
    <div class="row" >
        <div class="col-md-9">
        <div class="row" id="BADAN EKSEKUTIF MAHASISWA">
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-4"style="float:left">
                    <img src="../assets/images/bem.jpg" class="img-responsive">
                </div>
                <div class="col-md-8" style="float:left">
                    <h4><?=$bem["org_nama_".$bahasa]?></h4>
                    <p style="font-family:'Roboto';font-weight:400;"><?=$bem["org_deskripsi_".$bahasa]?></p>

                </div>
            </div>
            </div>
        </div><br><br><br>
        <div class="row" id="HIMPUNAN MAHASISWA">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-4" style="float:left">
                    <center>
                        <img src="../assets/images/hima.png" class="img-responsive">
                    </center>
                    </div>
                    <div class="col-md-6" style="float:left">
                    <h4><?=$judul["org_nama_".$bahasa]?></h4>
                    <p style="font-family:'Roboto';font-weight:400;"><?=$judul["org_deskripsi_".$bahasa]?></p>
                    </div>
                    <div class="mu-team-content">
                        <div class="row">

                            <!-- Team Single Content -->
                            <?php
                                for ($i=2; $i <7 ; $i++) { 
                                    $himpunanMahasiswa=mysqli_fetch_assoc(mysqli_query($connStts,"SELECT * from org_bahasa where org_bahasa_id=$i"));
                                    echo"
                                        <div class='col-sm-6 col-md-4'>
                                            <div class='mu-team-content-single'>
                                                <div class='mu-team-profile'>
                                                    <img class='img-responsive' src='".$himpunanMahasiswa["org_foto_deskripsi"]."'' alt='image'>
                                                    <div class='mu-team-social-info'>
                                                        <a href='#'><i class='icon-social-facebook'></i></a>
                                                        <a href='#'><i class='icon-social-twitter'></i></a>
                                                        <a href='#'><i class='icon-social-linkedin'></i></a>
                                                    </div>
                                                </div>
                                                <div class='mu-team-info'>
                                                    <h4>".$himpunanMahasiswa["org_nama_".$bahasa]."</h4>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    ";
                                }
                            ?>
                            <!-- / Team Single Content -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="UNIT KEGIATAN MAHASISWA">
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12" style="float:left">
                <center> <img src="../assets/images/bem.jpg" style="width:100%;height:20%" class="img-responsive"></center>
                <?php
                        $judul=mysqli_fetch_assoc(mysqli_query($connStts,"SELECT * from org_bahasa where org_bahasa_id=28"));
                ?>
                <h4 style="margin-top:10px;float:left"><?=$judul["org_nama_".$bahasa]?></h4>
                <p style="font-family:'Roboto';font-weight:400;float:left" ><?=$judul["org_deskripsi_".$bahasa]?></p>
                   
                    <div style="height:100%">
                        <div class="mu-portfolio-content">
                            <div class="filtr-container">

                                <?php
                                    for ($i=7; $i < 23; $i++) { 
                                        if($i!=13&&$i!=16){
                                            $himpunanMahasiswa=mysqli_fetch_assoc(mysqli_query($connStts,"SELECT * from org_bahasa where org_bahasa_id=$i"));
                                            echo"
                                            <div class='col-xs-6 col-sm-4 col-md-4 filtr-item' data-category='3'>
                                            <a class='mu-imglink' href='".$himpunanMahasiswa["org_foto_deskripsi"]."' title='".$himpunanMahasiswa["org_nama_".$bahasa]."'>
                                                <img class='img-responsive' src='".$himpunanMahasiswa["org_foto_deskripsi"]."'' alt='image'>
                                                <div class='mu-filter-item-content'>
                                                    <h4 class='mu-filter-item-title'>".$himpunanMahasiswa["org_nama_".$bahasa]."</h4>
                                                </div>
                                            </a>
                                            </div>
                                        ";
                                        }
                                        
                                        
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>

        </div>
        <div class="row" id="UNIT KEGIATAN KEROHANIAN">
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-3" style="float:left">
                <center>
                    <img src="../assets/images/ukk.jpg" class="img-responsive">
                </center>
                </div>
                <div class="col-md-6" style="float:left">
                <?php
                        $judul=mysqli_fetch_assoc(mysqli_query($connStts,"SELECT * from org_bahasa where org_bahasa_id=29"));
                ?>
                    <h4><?=$judul["org_nama_".$bahasa]?></h4>
                    <p style="font-family:'Roboto';font-weight:400;"><?=$judul["org_deskripsi_".$bahasa]?></p>
                </div>
                <div class="mu-team-content">
                        <div class="row">

                        <?php
                            for ($i=23; $i <27 ; $i++) { 
                                $himpunanMahasiswa=mysqli_fetch_assoc(mysqli_query($connStts,"SELECT * from org_bahasa where org_bahasa_id=$i"));
                                echo"
                                    <div class='col-sm-6 col-md-4'>
                                        <div class='mu-team-content-single'>
                                            <div class='mu-team-profile'>
                                                <img class='img-responsive' src='".$himpunanMahasiswa["org_foto_deskripsi"]."'' alt='image'>
                                                <div class='mu-team-social-info'>
                                                    <a href='#'><i class='icon-social-facebook'></i></a>
                                                    <a href='#'><i class='icon-social-twitter'></i></a>
                                                    <a href='#'><i class='icon-social-linkedin'></i></a>
                                                </div>
                                            </div>
                                            <div class='mu-team-info'>
                                                <h4>".$himpunanMahasiswa["org_nama_".$bahasa]."</h4>
                                            </div>
                                            
                                        </div>
                                    </div>
                                ";
                            }
                        ?>
                        </div>
                    </div>
            </div>
            </div>

        </div>

        </div>
    </div>
    </div>
</section>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
    
	
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	
    
    <script src="../bootstrap4/js/js.js"></script>
    <script src="../bootstrap4/js/proper.js"></script>
    <script src="../bootstrap4/js/bootstrap.min.js"></script>
    
<?php include("fabian/footer_".$bahasa.".php")?>
<script>
        $(".kegiatan").addClass("active");
        $(".kegiatan").addClass("text-white");
        $(".kegiatan").removeClass("text-dark");
</script>