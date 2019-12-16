<?php  
    session_start();
    $bahasa = 1;
    if (isset($_SESSION['bahasa'])) {
        $bahasa = $_SESSION['bahasa'];
    }
    else{
        $bahasa = 1; 
    }
?>
<?php
    include_once("connection.php");
    $id=$_GET["acara"];
    $semuaAcara=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from acara where id_acara=$id"));
    $query_tag =mysqli_fetch_array(mysqli_query($conn,"SELECT acara.tag FROM acara WHERE id_acara='$id'"));        
    $splittag = explode("|",$query_tag["tag"]); 
    $query_nama_tag = mysqli_query($conn, "SELECT * FROM tag");    
?>
<!DOCTYPE html>
<style>
    body {
        text-align: center;
        background-color: #1d1f20;
    }

    .wrapper {
        position: absolute;
        top: 82%;
        left: 50%;
        width: 90%;
        font-size: 0;
        transform: translate(-50%);
    }

    p {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: 500;
        color: #eee;
        opacity: 0.3;
    }

    .letter {
        width: 24px;
        display: inline-block;
        vertical-align: middle;
        position: relative;
        overflow: hidden;
        margin: 0 0;
        font-family: sans-serif;
        font-size: 24px;
        font-weight: 600;
        line-height: 24px;
        text-transform: uppercase;
        color: #eee;
    }

    .letter:before {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        word-break: break-all;
        background-color: #1d1f20;
    }

    .letter:nth-child(1):before {
        content: "9362150487";
        margin-top: -144px;
        animation-name: letter1;
        animation-duration: 0.96s;
        animation-delay: 0.72s;
        animation-fill-mode: forwards;
    }

    @keyframes letter1 {
        from {
            margin-top: -144px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(2):before {
        content: "8704635291";
        margin-top: -24px;
        animation-name: letter2;
        animation-duration: 1.26s;
        animation-delay: 0.37s;
        animation-fill-mode: forwards;
    }

    @keyframes letter2 {
        from {
            margin-top: -24px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(3):before {
        content: "0149738265";
        margin-top: -96px;
        animation-name: letter3;
        animation-duration: 0.288s;
        animation-delay: 0.91s;
        animation-fill-mode: forwards;
    }

    @keyframes letter3 {
        from {
            margin-top: -96px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(4):before {
        content: "3479528601";
        margin-top: -216px;
        animation-name: letter4;
        animation-duration: 1.764s;
        animation-delay: 0.51s;
        animation-fill-mode: forwards;
    }

    @keyframes letter4 {
        from {
            margin-top: -216px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(5):before {
        content: "3051284679";
        margin-top: -48px;
        animation-name: letter5;
        animation-duration: 0.1866666667s;
        animation-delay: 0.93s;
        animation-fill-mode: forwards;
    }

    @keyframes letter5 {
        from {
            margin-top: -48px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(6):before {
        content: "7096132854";
        margin-top: -96px;
        animation-name: letter6;
        animation-duration: 2.464s;
        animation-delay: 0.23s;
        animation-fill-mode: forwards;
    }

    @keyframes letter6 {
        from {
            margin-top: -96px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(7):before {
        content: "4632071859";
        margin-top: -120px;
        animation-name: letter7;
        animation-duration: 0.2333333333s;
        animation-delay: 0.93s;
        animation-fill-mode: forwards;
    }

    @keyframes letter7 {
        from {
            margin-top: -120px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(8):before {
        content: "1620839475";
        margin-top: -48px;
        animation-name: letter8;
        animation-duration: 1.4133333333s;
        animation-delay: 0.47s;
        animation-fill-mode: forwards;
    }

    @keyframes letter8 {
        from {
            margin-top: -48px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(9):before {
        content: "7356908241";
        margin-top: -216px;
        animation-name: letter9;
        animation-duration: 0.54s;
        animation-delay: 0.85s;
        animation-fill-mode: forwards;
    }

    @keyframes letter9 {
        from {
            margin-top: -216px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(10):before {
        content: "3279401856";
        margin-top: 0px;
        animation-name: letter10;
        animation-duration: 0s;
        animation-delay: 0.03s;
        animation-fill-mode: forwards;
    }

    @keyframes letter10 {
        from {
            margin-top: 0px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(11):before {
        content: "4237509186";
        margin-top: -192px;
        animation-name: letter11;
        animation-duration: 3.2711111111s;
        animation-delay: 0.08s;
        animation-fill-mode: forwards;
    }

    @keyframes letter11 {
        from {
            margin-top: -192px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(12):before {
        content: "9841362507";
        margin-top: -24px;
        animation-name: letter12;
        animation-duration: 0.94s;
        animation-delay: 0.53s;
        animation-fill-mode: forwards;
    }

    @keyframes letter12 {
        from {
            margin-top: -24px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(13):before {
        content: "3064879521";
        margin-top: -144px;
        animation-name: letter13;
        animation-duration: 2.4s;
        animation-delay: 0.3s;
        animation-fill-mode: forwards;
    }

    @keyframes letter13 {
        from {
            margin-top: -144px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(14):before {
        content: "7043981625";
        margin-top: -96px;
        animation-name: letter14;
        animation-duration: 1.152s;
        animation-delay: 0.64s;
        animation-fill-mode: forwards;
    }

    @keyframes letter14 {
        from {
            margin-top: -96px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(15):before {
        content: "7863219045";
        margin-top: -168px;
        animation-name: letter15;
        animation-duration: 0.56s;
        animation-delay: 0.84s;
        animation-fill-mode: forwards;
    }

    @keyframes letter15 {
        from {
            margin-top: -168px;
        }

        to {
            margin-top: 24px;
        }
    }

    .letter:nth-child(16):before {
        content: "2631804579";
        margin-top: 0px;
        animation-name: letter16;
        animation-duration: 0s;
        animation-delay: 0.47s;
        animation-fill-mode: forwards;
    }

    @keyframes letter16 {
        from {
            margin-top: 0px;
        }

        to {
            margin-top: 24px;
        }
    }

    #kotak {
        color: white;
        margin-top: 95px;
        font-weight: bolder;
    }
    #gambar
    {
        width: 1000px;
        height: 500px;
    }
</style>  
	<div id="wrapper">
	<div class="letters">    
        <?php 
            $index = count($splittag);
            while ($row = mysqli_fetch_array($query_nama_tag)) {
                for ($i=0; $i < $index; $i++) { 
                    if ($row['tag_id'] == $splittag[$i]) {                        
                        echo "<button type='button' disabled='false' class='btn btn-primary'>".$row['tag_nama_'.$bahasa]."</button>";
                    }                        
                }            
            }
            
        ?>            
    </div>
	</div>
	<img src=".<?php=$semuaAcara["gambar"]?>" alt="error">
	<div id="Kotak">
    <div><?php echo $semuaAcara["tempat"]." ".$semuaAcara["waktu"]?></div>
    <div><?php echo $semuaAcara["judul_".$bahasa]?></div>
    <div><?php echo $semuaAcara["deskripsi_".$bahasa]?></div>
	</div>