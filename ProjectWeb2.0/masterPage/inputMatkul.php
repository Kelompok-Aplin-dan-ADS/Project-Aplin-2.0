<?php
    require_once("config.php");

    $arrJurusan = [];
    $arrJurusan[0] = "S1-Informatika";
    $arrJurusan[1] = "S1-DKV";
    $arrJurusan[2] = "S1-SIB";
    $arrJurusan[3] = "S1-Elektro";
    $arrJurusan[4] = "S1-Industri";
    $arrJurusan[5] = "D3-Informatika";

    if(isset($_POST['btnAdd'])){
        $id_matkul = $_POST['kode'];
        $nama_mata_kuliah = $_POST['newMat'];
        $jurusan = $_POST['jurusan'];

        $query = "INSERT INTO mata_kuliah VALUES('$id_matkul','$nama_mata_kuliah','$jurusan')";
        $conn->query($query);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <li><a href="index.php">Insert Event</a> </li>
        <li><a href="pageUpdate.php">Update Event</a> </li>
        <li><a href="inputDosen.php">Insert Dosen</a></li>
        <li><a href="pageDosenUpdate.php">Update Dosen</li>
        <li><a href="inputMatkul.php">Insert Mata Kuliah</a></li>
        <li><a href="pageUpdateMatkul.php">Update Mata Kuliah</a></li>
      </ul>
    </div>
    
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            <form action="#" method="post" class="form" enctype="multipart/form-data">
              <label class='label required' for='title' style="font-size: 30pt;">Tambah Mata Kuliah Baru</label>
              <p class='field required'>
                <label class='label required' for='kode'>Kode Mata kuliah</label>
                <input class='text-input' id='kode' name='kode' type='text'>
              </p>
              <p class='field required'>
                <label class='label' for='newMat'>Nama Mata Kuliah Baru</label>
                <input class='text-input' id='newMat' name='newMat' required type='text'>
              </p>
              <p class='field'>
                <label class='label' for='jurusan'>Acara Jurusan</label>
                <select class='select' name="jurusan" id='jurusan'>
                  <option value="S1-Informatika">S1-Informatika</option>
                  <option value="S1-DKV">S1-DKV</option>
                  <option value="S1-SIB">S1-SIB</option>
                  <option value="S1-Elektro">S1-Elektro</option>
                  <option value="S1-Industri">S1-Industri</option>
                  <option value="D3-Informatika">D3-Informatika</option>
                </select>
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
