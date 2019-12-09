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
            while ($row = mysqli_fetch_array($query_nama_tag)) {
                for ($i=0; $i < $index; $i++) { 
                    if ($row['tag_id'] == $splittag[$i]) {                        
                        echo "<button type='button' disabled='false' class='btn btn-primary'>".$row['tag_nama_'.$bahasa]."</button>";
                    }                        
                }            
            }
            
        ?>            
    </div>
    <div><?php echo $semuaAcara["tempat"]." ".$semuaAcara["waktu"]?></div>
    <div><?php echo $semuaAcara["judul_".$bahasa]?></div>
    <div><?php echo $semuaAcara["deskripsi_".$bahasa]?></div>
</body>
</html>