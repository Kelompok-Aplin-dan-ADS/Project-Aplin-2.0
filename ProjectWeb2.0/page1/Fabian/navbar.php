<?php
    session_start();  
?>
<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
<link rel="stylesheet" href="Fabian/fab.css">
    <ul class="bg-stts nav nav-pills navbar-light" >
        <li class="nav-item logo-kiri" >
            <img class="logo"src="../assets/logo.png" >
        </li>
        <li class="nav-item dropdown tengah" >
            <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">BAHASA</a>
            <form action="#" method="post">
            <div class="dropdown-menu">
            <a class="dropdown-item" id="indo"href="#" onclick="gantiBahasa(1)">INDONESIA</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" id="eng" href="#" onclick="gantiBahasa(2)">INGGRIS</a>
            </div>
            </form>
        </li>
        <?php
            include_once("connection.php");
            $bahasa=1;
            if(isset($_SESSION["bahasa"])){
                $bahasa=$_SESSION["bahasa"];
            }else{
                $_SESSION["bahasa"]=1;
            }
            $home=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from navbar where id=1"));
            $kegiatan=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from navbar where id=2"));
            $akademik=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from navbar where id=3"));
            $dosen=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from navbar where id=4"));
            $about=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from navbar where id=5"));
            $home=$home["nama_".$bahasa];
            $kegiatan=$kegiatan["nama_".$bahasa];
            $akademik=$akademik["nama_".$bahasa];
            $dosen=$dosen["nama_".$bahasa];
            $about=$about["nama_".$bahasa];
            echo"
                <li class='nav-item tengah '>
                    <a class='nav-link text-dark tentang' href='index.php'>$home</a>
                </li>
                <li class='nav-item tengah '>
                    <a class='nav-link text-dark kegiatan' href='Kegiatan.php'>$kegiatan</a>
                </li>
                <li class='nav-item tengah '>
                    <a class='nav-link text-dark akademik' href='akademik.php'>$akademik</a>
                </li>
                <li class='nav-item tengah '>
                    <a class='nav-link text-dark dosen' href='dosen.php'>$dosen</a>
                </li>
                <li class='nav-item tengah '>
                    <a class='nav-link text-dark about' href='about.php'>$about</a>
                </li>
            ";
        ?>
        
    </ul>
</div> 

<script src="../bootstrap4/js/proper.js"></script>
<script>
    function gantiBahasa(ind){
        $.ajax({
            method: "post",
            url: "fabian/gantiBahasa.php",
            data:{
                id:ind
            },
            success: function (response) {
                location.reload();
            }
        });
    }
</script>