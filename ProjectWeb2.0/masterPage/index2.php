<?php
    require_once("config.php");

    if(isset($_POST['btnLogin'])){
      if($_POST['name'] == "admin" && $_POST['pass']== "admin"){
        $_SESSION['isLogin'] = "admin";
      }
    }

    if(!isset($_SESSION['isLogin'])){
      header("location: ../page1");
    }
    else if(isset($_POST["btnSend"])){
        $fileName = $_FILES['imgFile']['name'];
        $fileTmp = $_FILES['imgFile']['tmp_name'];
        $fileDestination = "./../assets/events/".$fileName;

        $fileCheck = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileCheck));

        $arrAllow = array('jpg','png');

        if(in_array($fileActualExt,$arrAllow)){
          move_uploaded_file($fileTmp,$fileDestination);
          $judul = $_POST['judul'];
          $desc = $_POST['textEvent'];
          $judul_ing = $_POST['judul_ing'];
          $desc_ing = $_POST['textEvent_ing'];
          $waktu = $_POST['waktuAcara'];
          $tempat = $_POST['place'];
          $link = "";
          $tag="";
          if(!empty($_POST["tag"])){
            foreach ($_POST['tag'] as $key => $value) {
              $tag.= $value."|";
            }
          }
          $kategori = $_POST['kategori'];
          $jurusan = $_POST['jurusan'];
          $query = "INSERT INTO acara VALUES('','$fileDestination','$judul','$judul_ing','$desc','$desc_ing','$waktu','$tempat','$link','$tag','$kategori','$jurusan')";
          $conn->query($query);
        }
        else{
          echo "<h1 style='color:white;'>File bukan foto</h1>";
        }
        
    }

    $query = "SELECT * FROM tag";
    $listTag = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="themeCss.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <style type="text/css">
    .buttonIng{
        display: inline-block;
        padding: 0.46em 1.6em;
        border: 0.1em solid #000000;
        margin: 0 0.2em 0.2em 0;
        border-radius: 0.12em;
        box-sizing: border-box;
        text-decoration: none;
        font-family: 'Roboto',sans-serif;
        font-weight: 300;
        color: #000000;
        text-shadow: 0 0.04em 0.04em rgba(0,0,0,0.35);
        background-color: #42cc8c;
        text-align: center;
        transition: all 0.15s;
    }
    .buttonIng:hover{
        text-shadow: 0 0 2em rgba(255,255,255,1);
        color:#FFFFFF;
        border-color:#FFFFFF;
    }
  </style>
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
              <label class='label required' for='title' style="font-size: 30pt;">Halaman Masukan Acara Baru</label>
              <p class='field required half'>
                <label class='label required' for='judul'>Judul Acara</label>
                <input class='text-input' id='name' name='judul' placeholder="Co: Pekan Kampus" required>
              </p>
              <p class='field half'>
                <label class='label' for='judul'>Event Title[Inggris]</label>
                <input class='text-input' id='name' name='judul_ing' placeholder="Co: Pekan Kampus">
              </p>
              <p class='field'>
                <label class='label required' for='imgFile'>Gambar Acara</label>
                <input class='file-input' id='name' name='imgFile' type='file'>
              </p>
              <p class='field required'>
                <label class='label' for='textEvent'>Deskripsi  Acara </label>
                <textarea class='textarea' cols='50' id='about' name='textEvent' rows='4'></textarea>
              </p>
              <p class='field'>
                <label class='label' for='textEvent'>Event Description[Inggris] </label>
                <textarea class='textarea' cols='50' id='about' name='textEvent_ing' rows='4'></textarea>
              </p>
              <p class='field required'>
                <label class='label' for='waktuAcara'>Waktu Acara</label>
                <input class='text-input' id='waktuAcara' required name='waktuAcara' type='date'>
              </p>
              <p class='field required'>
                <label class='label' for='place'>Tempat Acara</label>
                <input class='text-input' id='place' name='place' required type='text'>
              </p>
              <p class='field half'>
                <label class='label' for='Tag'>Tag</label>
                <?php
                  foreach ($listTag as $key => $value) {
                    ?><input type="checkbox" name="tag[]" id="tag" value="<?=$value['tag_id']?>"><?=$value['tag_nama_1']?> <br>
                    <?php
                  }
                ?>
              </p>
              <p class='field half'>
                <label class='label' for='kategori'>Kategori</label>
                <select class='select' id='select' name="kategori">
                  <option value="1">Berita</option>
                  <option value="2">Agenda</option>
                  <option value="3">Media Massa</option>
                </select>
              </p>
              
              <p class='field'>
                <label class='label' for='jurusan'>Acara Jurusan</label>
                <select class='select' name="jurusan" id='jurusan'>
                <option value="01">D3 Sistem Informasi</option>
                  <option value="02">Bachelor of Information Technology</option>
                  <option value="10">Strata-1 Teknik Elektro</option>
                  <option value="11">Strata-1 Informatika</option>
                  <option value="12">Strata-1 Teknik Industri</option>
                  <option value="14">Desain Produk</option>
                  <option value="17">Desain Komunikasi Visual</option>
                  <option value="18">Strata-1 Sistem Informasi Bisnis</option>
                  <option value="21">S2 Teknologi Informasi</option>
                  <option value="31">Strata-1 Informatika profesional (kelas malam)</option>
                </select>
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
<!-- partial -->
  <script src="jquery3.4.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src="scriptTheme.js"></script>
<script>
    $(document).ready(function () {
        $("#sideBar").removeClass("active");
        $(".insertEvent").addClass("active");
        $(".buttonIng").click(function(){
          $( ".formIng" ).toggle();
        });
    });
</script>