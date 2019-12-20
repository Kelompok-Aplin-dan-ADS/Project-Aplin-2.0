<?php
$conn=mysqli_connect("localhost","root","","project-aplin-2.0");
session_start();
    $bahasa=1;
    if(isset($_SESSION["bahasa"])){
        $bahasa=$_SESSION["bahasa"];
    }else{
        $_SESSION["bahasa"]=1;
    }
    $kata=$_POST["kata"];
    $selectAgenda=mysqli_query($conn,"SELECT * FROM acara where judul_$bahasa like '%$kata%' OR tempat like '%$kata%' ORDER BY id_acara DESC , kategori asc LIMIT 9");
?>
<?php
    foreach ($selectAgenda as $key => $value)
    {
        $desc=substr($value["deskripsi_$bahasa"],0,50);
        echo"
            <div class='col-md-4 col-sm-12 single-feature pt-10 pb-10 d-flex flex-row'>
                <img class='img-fluid' src='$value[gambar]' width='100' height='100' alt='img'>
                <div class='desc'>
                    <h2>";
                    $judul=$value["judul_$bahasa"];
                    echo"$judul</h2>
                    <p>
                        $desc
                    </p>
                    <a class='text-uppercase' href='fabian/DetailKegiatan.php?acara=$value[id_acara]'>Learn Details</a>
                </div>
            </div>
        ";
    }
?>