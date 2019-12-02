<?php
    require("config.php");
    
    $nip = $_GET['nip'];
    if(isset($_POST['btnSend'])){
        $fileName = $_FILES['imgDesc']['name'];
        $fileTmp = $_FILES['imgDesc']['tmp_name'];
        $fileDestination = "../..//assets//images//".$fileName;
        $fileDatabase = "..//assets//images//".$fileName;
        move_uploaded_file($fileTmp,$fileDestination);
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $jabatan = $_POST['jabatan'];
        $quotes = $_POST['quotes'];

        if($fileName != ""){
            $query = "UPDATE dosen SET nama='$nama',gambar='$fileDatabase',email='$email',jabatan='$jabatan',quotes='$quotes' WHERE nip='$nip'";
            $conn->query($query);
        }
        else{
            $query = "UPDATE dosen SET nama='$nama',email='$email',jabatan='$jabatan',quotes='$quotes' WHERE nip='$nip'";
            $conn->query($query);
        }
        header("location: ./../pageDosenUpdate.php");
    }
    else{
        $nip = $_GET['nip'];
        $query = "SELECT * FROM dosen WHERE nip='$nip'";
        $temp = $conn->query($query);
        $dosenNow = mysqli_fetch_assoc($temp);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>SideNav</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="../themeCss.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li><a href="../index2.php">Insert Event</a> </li>
        <li><a href="../pageUpdate.php">Update Event</a> </li>
        <li><a href="../inputDosen.php">Insert Dosen</a></li>
        <li><a href="../pageDosenUpdate.php">Update Dosen</li>
        <li><a href="../inputMatkul.php">Insert Mata Kuliah</a></li>
        <li><a href="../pageUpdateMatkul.php">Update Mata Kuliah</a></li>
      </ul>
    </div>
    
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            <form action="#" method="post" class="form" enctype="multipart/form-data">
              <label class='label required' for='title' style="font-size: 30pt;">Halaman Masukan Acara Baru</label>
              <p class='field required'>
                <label class='label required' for='nama'>Nama</label>
                <input class='text-input' id='nama' name='nama' value="<?=$dosenNow['nama']?>">
              </p>
              <p class='field'>
                <label class='label required' for='imgDesc'>Gambar Dosen</label>
                <input class='file-input' id='imgDesc' name='imgDesc' type='file'>
              </p>
              <p class='field required'>
                <label class='label' for='Email'>Email </label>
                <input class="text-input" type="email" name="email" id="" value="<?=$dosenNow['email']?>">
              </p>
              <p class='field required'>
                <label class='label' for='jabatan'>jabatan</label>
                <input class="text-input" type="text" name="jabatan" id="" value="<?=$dosenNow['jabatan']?>">
              </p>
              <p class="field required">
                  <label class='label' for='Quotes'>Quotes</label>
                  <textarea class="textarea" name="quotes" id="" cols="30" rows="4"><?=$dosenNow['quotes']?></textarea>
              </p>
              <p class='field'>
                <input class='button' type='submit' name="btnSend" value='Kirim'>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<script src="jquery3.4.js"></script>
<script src="../scriptTheme.js"></script>
