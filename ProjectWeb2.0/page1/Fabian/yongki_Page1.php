<?php
    include_once("connection.php");
    $bahasa=1;
    if(isset($_SESSION["bahasa"])){
        $bahasa=$_SESSION["bahasa"];
    }else{
        $_SESSION["bahasa"]=1;
    }

    $semuaAcara=mysqli_query($conn,"SELECT * from acara");
    $jum=0;
    foreach ($semuaAcara as $key => $value) {
        $jum++;
    }
    $semuaAcara=mysqli_query($conn,"SELECT * from acara");
    $ind=0;
    $id=0;
    $tampilCard=[];
    foreach ($semuaAcara as $key => $value) {
        $ind++;
        if($ind>$jum-5){
            $tampilCard[$id]["id"]=$value["id_acara"];
            $tampilCard[$id]["gambar"]=$value["gambar"];
            $tampilCard[$id]["judul_".$bahasa]=$value["judul_".$bahasa];
            $desc=substr($value["deskripsi_".$bahasa],0,20)."...";
            $tampilCard[$id]["desc"]=$desc;
            $id++;
        }
    }
    echo $id;
?>