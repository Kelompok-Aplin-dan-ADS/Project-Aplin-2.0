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
    $jum=0;
    $total=count($tamp)-1;
    while((int)$jum<3){
        $ran=rand(0,$total);
        $acara[$jum]=$tamp[$ran];
        $jum++;
        array_splice($tamp,$ran,1);
        $total--;
    }
?>