<?php
    require_once("config.php");

    if(isset($_POST['btnAdd'])){
        $fileName = $_FILES['imgFile']['name'];
        $fileTmp = $_FILES['imgFile']['tmp_name'];
        $fileDestination = "..//assets//images//".$fileName;

        $fileCheck = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileCheck));

        $arrAllow = array('jpg','png');

        if(in_array($fileActualExt,$arrAllow)){
          move_uploaded_file($fileTmp,$fileDestination);
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $jabatan = $_POST['jabatan'];
          $jabatan_ing = $_POST['jabatan_ing'];
          $quotes = $_POST['quotes'];

          $query = "SELECT * FROM dosen";
          $jum = $conn->query($query);
          $jum2 =  $jum->num_rows;
          $jum2++;

          $query = "INSERT INTO dosen VALUES('$jum2','$nama','$email','$jabatan','$jabatan_ing','$fileDestination','$quotes')";
          $conn->query($query);
        }
        else{
          echo "<h1 style='color:white;'>File bukan foto</h1>";
        }
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="themeCss.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li><a href="index2.php">Insert Event</a> </li>
        <li><a href="pageUpdate.php">Update Event</a> </li>
        <li><a href="inputDosen.php">Insert Dosen</a></li>
        <li><a href="pageDosenUpdate.php">Update Dosen</li>
        <li><a href="inputMatkul.php">Insert Mata Kuliah</a></li>
        <li><a href="pageUpdateMatkul.php">Update Mata Kuliah</a></li>
        <li><a href="tag/insertTag.php">Insert Tag</a></li>
        <li><a href="index.php" name="logout">Logout</a></li>
      </ul>
    </div>
    
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            <form action="#" method="post" class="form" enctype="multipart/form-data">
              <label class='label required' for='title' style="font-size: 30pt;">Tambah Dosen Baru</label>
              <p class='field required'>
                <label class='label required' for='nama'>Nama</label>
                <input class='text-input' id='name' name='nama' placeholder="Co: Pak Agus">
              </p>
              <p class='field'>
                <label class='label required' for='imgFile'>Gambar Acara</label>
                <input class='file-input' id='name' name='imgFile' type='file'>
              </p>
              <p class='field required'>
                <label class='label' for='email'>Email</label>
                <input class='text-input' id='email' name='email' required type='email'>
              </p>
              <p class='field required'>
                <label class='label' for='jabatan'>Jabatan</label>
                <input class='text-input' id='jabatan' name='jabatan' required type='text'>
              </p>
              <p class='field required'>
                <label class='label' for='jabatan'>Jabatan [English]</label>
                <input class='text-input' id='jabatan' name='jabatan_ing' required type='text'>
              </p>
              <p class='field required'>
                <label class='label' for='quotes'>Quotes</label>
                <textarea class='textarea' cols='50' id='about' name='quotes' rows='4'></textarea>
              </p>
              <p class='field'>
                <input class='button' type='submit' name="btnAdd" value='Kirim'>
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
<script src="scriptTheme.js"></script>

