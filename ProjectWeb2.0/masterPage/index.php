<?php
    require_once("config.php");

    if(isset($_POST["btnSend"])){
        $fileName = $_FILES['imgFile']['name'];
        $fileTmp = $_FILES['imgFile']['tmp_name'];
        $fileDestination = "./../assets/events/".$fileName;
        move_uploaded_file($fileTmp,$fileDestination);
        $judul = $_POST['judul'];
        $desc = $_POST['textEvent'];
        $waktu = $_POST['waktuAcara'];
        $tempat = $_POST['place'];
        $link = "temp link";
        //$tag = $_POST['eventTag'];
        $kategori = $_POST['kategori'];
        $jurusan = $_POST['jurusan'];

        $query = "INSERT INTO acara VALUES('','$fileDestination','$judul','$desc','$waktu','$tempat','$link','','$kategori','$jurusan')";
        $conn->query($query);
    }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SideNav</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="themeCss.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
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
              <label class='label required' for='title' style="font-size: 30pt;">Halaman Masukan Acara Baru</label>
              <p class='field required'>
                <label class='label required' for='judul'>Judul Acara</label>
                <input class='text-input' id='name' name='judul' placeholder="Co: Pekan Kampus">
              </p>
              <p class='field'>
                <label class='label required' for='imgFile'>Gambar Acara</label>
                <input class='file-input' id='name' name='imgFile' type='file'>
              </p>
              <p class='field required'>
                <label class='label' for='textEvent'>Deskripsi  Acara: </label>
                <textarea class='textarea' cols='50' id='about' name='textEvent' rows='4'></textarea>
              </p>
              <p class='field required'>
                <label class='label' for='waktuAcara'>Waktu Acara</label>
                <input class='text-input' id='waktuAcara' required name='waktuAcara' type='date'>
              </p>
              <p class='field required'>
                <label class='label' for='place'>Tempat Acara</label>
                <input class='text-input' id='place' name='place' required type='text'>
              </p>
              <p class='field half required'>
                <label class='label' for='linkPage'>Link Halaman</label>
                <input class='text-input' id='linkPage' name='linkPage' required type='text'>
              </p>
              <p class='field half'>
                <label class='label' for='kategori'>Kategori</label>
                <select class='select' id='select' name="kategori">
                  <option value="Berita">Berita</option>
                  <option value="Acara">Acara</option>
                  <option value="Media">Media</option>
                  <option value="Agenda">Agenda</option>
                  <option value="Teknologi">Teknologi</option>
                </select>
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script>
    $(document).ready(function(){
  $("#menu-toggle").click(function(e){
    e.preventDefault();
    $("#wrapper").toggleClass("menuDisplayed");
  });
  (function() {
  var magicFocus;

  magicFocus = class magicFocus {
    constructor(parent) {
      var i, input, len, ref;
      this.show = this.show.bind(this);
      this.hide = this.hide.bind(this);
      this.parent = parent;
      if (!this.parent) {
        return;
      }
      this.focus = document.createElement('div');
      this.focus.classList.add('magic-focus');
      this.parent.classList.add('has-magic-focus');
      this.parent.appendChild(this.focus);
      ref = this.parent.querySelectorAll('input, textarea, select');
      for (i = 0, len = ref.length; i < len; i++) {
        input = ref[i];
        input.addEventListener('focus', function() {
          return window.magicFocus.show();
        });
        input.addEventListener('blur', function() {
          return window.magicFocus.hide();
        });
      }
    }

    show() {
      var base, base1, el;
      if (!(typeof (base = ['INPUT', 'SELECT', 'TEXTAREA']).includes === "function" ? base.includes((el = document.activeElement).nodeName) : void 0)) {
        return;
      }
      clearTimeout(this.reset);
      if (typeof (base1 = ['checkbox', 'radio']).includes === "function" ? base1.includes(el.type) : void 0) {
        el = document.querySelector(`[for=${el.id}]`);
      }
      this.focus.style.top = `${el.offsetTop || 0}px`;
      this.focus.style.left = `${el.offsetLeft || 0}px`;
      this.focus.style.width = `${el.offsetWidth || 0}px`;
      return this.focus.style.height = `${el.offsetHeight || 0}px`;
    }

    hide() {
      var base, el;
      if (!(typeof (base = ['INPUT', 'SELECT', 'TEXTAREA', 'LABEL']).includes === "function" ? base.includes((el = document.activeElement).nodeName) : void 0)) {
        this.focus.style.width = 0;
      }
      return this.reset = setTimeout(function() {
        return window.magicFocus.focus.removeAttribute('style');
      }, 200);
    }

  };

  // initialize
  window.magicFocus = new magicFocus(document.querySelector('.form'));

  $(function() {
    return $('.select').customSelect();
  });

}).call(this);
});
  </script>
</body>
</html>