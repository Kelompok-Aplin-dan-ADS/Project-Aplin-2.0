<?php
    include_once("connection.php");
    $id=$_GET["acara"];
    $semuaAcara=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from acara where id_acara=$id"));
    $query_tag =mysqli_fetch_array(mysqli_query($conn,"SELECT acara.tag FROM acara WHERE id_acara='$id'"));        
    $splittag = explode("|",$query_tag["tag"]);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src=".<?php=$semuaAcara["gambar"]?>" alt="error">
    <div>
        <?php 
            $index = count($splittag);
            for ($i=0; $i < $index; $i++) { 
                echo "<button type='button' disabled='false' class='btn btn-primary'>".$splittag[$i]."</button>";
            }
        ?>            
    </div>
    <div><?php echo $semuaAcara["tempat"]." ".$semuaAcara["waktu"]?></div>
    <div><?php echo $semuaAcara["judul"]?></div>
    <div><?php echo $semuaAcara["deskripsi"]?></div>
</body>
</html>