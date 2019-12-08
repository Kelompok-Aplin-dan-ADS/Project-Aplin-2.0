<?php
    $conn=mysqli_connect("localhost","root","","project-aplin-2.0");
    $kata=$_GET["kata"];
    $selectAgenda=mysqli_query($conn,"SELECT * FROM acara where judul like '%$kata%' OR tempat like '%$kata%' ORDER BY id_acara DESC , kategori asc LIMIT 9");
?>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<section class="featured-area">
    <div class="container">
        <div class="row">
            <?php
                foreach ($selectAgenda as $key => $value) {
                    $desc=substr($value["deskripsi"],0,50);
                    echo"
                        <div class='col-md-4 col-sm-12 single-feature pt-10 pb-10 d-flex flex-row'>
                            <img class='img-fluid' src='../../$value[gambar]' width='100' height='100' alt='img'>
                            <div class='desc'>
                                <h2>$value[judul]</h2>
                                <p>
                                    $desc
                                </p>
                                <a class='text-uppercase' href='#'>Learn Details</a>
                            </div>
                        </div>
                    ";
                }
            ?>
            
        </div>
    </div>
</section>