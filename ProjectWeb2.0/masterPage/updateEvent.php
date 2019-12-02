<?php
    require_once("config.php");


    if(isset($_POST['del'])){
        $id = $_POST['del'];
        $query = "DELETE FROM acara WHERE id_acara = $id";
        $conn->query($query);
        header("location: pageUpdate.php");
    }
    else if(isset($_POST['btnSend'])){
        $fileName = $_FILES['imgFile']['name'];
        $fileTmp = $_FILES['imgFile']['tmp_name'];
        $fileDestination = "./../assets/events/".$fileName;
        move_uploaded_file($fileTmp,$fileDestination);

        $id = $_POST['btnSend'];
        $judul = $_POST['judul'];
        $desc = $_POST['textEvent'];
        $waktu = $_POST['waktuAcara'];
        $tempat = $_POST['place'];
        $link = $_POST['linkPage'];
        $tag="";
        if(!empty($_POST["tag"])){
          foreach ($_POST['tag'] as $key => $value) {
            $tag.= $value."|";
          }
        }
        $kategori = $_POST['kategori'];
        $jurusan = $_POST['jurusan'];
        $query = "UPDATE acara SET judul='$judul',gambar='$fileDestination',deskripsi='$desc',waktu='$waktu',tempat='$tempat',link_halaman='$link',tag='$tag',kategori='$kategori',jurusan='$jurusan' WHERE id_acara = '$id'";
        $conn->query($query);
        header("location: pageUpdate.php");
    }
    else{
        $id = $_POST['id'];
        $query = "SELECT * FROM acara WHERE id_acara = $id";
        $acara = $conn->query($query);

        $listAcara = mysqli_fetch_assoc($acara);

        $arrJurusan = [];
        $arrJurusan[0] = "D3 Sistem Informasi";
        $arrJurusan[1] = "Bachelor of Information Technology";
        $arrJurusan[2] = "Strata-1 Teknik Elektro";
        $arrJurusan[3] = "Strata-1 Informatika";
        $arrJurusan[4] = "Strata-1 Teknik Industri";
        $arrJurusan[5] = "Desain Produk"; 
        $arrJurusan[6] = "Desain Komunikasi Visual";
        $arrJurusan[7] = "Strata-1 Sistem Informasi Bisnis";
        $arrJurusan[8] = "S2 Teknologi Informasi";
        $arrJurusan[9] = "Strata-1 Informatika profesional (kelas malam)";

        $arrIndex = [];
        $arrIndex[0] = "01";
        $arrIndex[1] = "02";
        $arrIndex[2] = "10";
        $arrIndex[3] = "11";
        $arrIndex[4] = "12";
        $arrIndex[5] = "14";
        $arrIndex[6] = "17";
        $arrIndex[7] = "18";
        $arrIndex[8] = "21";
        $arrIndex[9] = "31";

        $arrKat = [];
        $arrKat[0] = "Berita";
        $arrKat[1] = "Agenda";
        $arrKat[2] = "Media";
    }
    
    $query = "SELECT * FROM tag";
    $listTag = $conn->query($query);

    $selectedTag = explode("|",$listAcara['tag']);
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
        <li><a href="index2.php">Insert Event</a> </li>
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
              <label class='label required' for='title' style="font-size: 30pt;">Update Acara</label>
              <p class='field required'>
                <label class='label required' for='judul'>Judul Acara</label>
                <input class='text-input' id='name' name='judul' placeholder="Co: Pekan Kampus" value="<?= $listAcara['judul'] ?>">
              </p>
              <p class='field'>
                <label class='label required' for='imgFile'>Gambar Acara</label>
                <input class='file-input' id='name' name='imgFile' type='file'>
              </p>
              <p class='field required'>
                <label class='label' for='textEvent'>Deskripsi  Acara: </label>
                <textarea class='textarea' cols='50' id='about' name='textEvent' rows='4'><?php echo $listAcara['deskripsi'] ?></textarea>
              </p>
              <p class='field required'>
                <label class='label' for='waktuAcara'>Waktu Acara</label>
                <input class='text-input' id='waktuAcara' required name='waktuAcara' type='date' value="<?=$listAcara['waktu']?>">
              </p>
              <p class='field required'>
                <label class='label' for='place'>Tempat Acara</label>
                <input class='text-input' id='place' name='place' required type='text' value="<?=$listAcara['tempat']?>">
              </p>
              <p class='field half'>
                <label class='label' for='Tag'>Tag</label>
                <?php
                  foreach ($listTag as $key => $value) {
                    if(in_array($value['tag_id'],$selectedTag)){
                      ?><input type="checkbox" name="tag[]" id="tag" value="<?=$value['tag_id']?>" checked><?=$value['tag_nama_1']?> <br>
                      <?php
                    }
                    else{
                      ?><input type="checkbox" name="tag[]" id="tag" value="<?=$value['tag_id']?>"><?=$value['tag_nama_1']?> <br>
                      <?php
                    }
                  }
                ?>
              </p>
              <p class='field half'>
                <label class='label' for='kategori'>Kategori</label>
                <select class="select" name="kategori" id="kategori">
                  <?php
                  $ctr = 1;
                    foreach ($arrKat as $key => $value) {
                      if($ctr == $listAcara['kategori']){
                        ?><option value="<?=$ctr?>" selected><?=$value?></option>
                        <?php
                      }
                      else{
                        ?><option value="<?=$ctr?>"><?=$value?></option>
                        <?php
                      }
                      $ctr++;
                    }
                  ?>
                </select>
              </p>
              <p class='field'>
                <label class='label' for='jurusan'>Acara Jurusan</label>
                <select class="select" name="jurusan" id="jurusan">
                <?php
                      $ctr = 0;
                      foreach ($arrIndex as $key => $value) {
                          if($value == $listAcara['jurusan']){
                              ?>
                                  <option value="<?=$value?>" selected><?=$arrJurusan[$ctr]?></option>
                              <?php
                          }
                          else{
                              ?>
                                  <option value="<?=$value?>"><?=$arrJurusan[$ctr]?></option>
                              <?php
                          }
                          $ctr++;
                      }
                    ?>
                </select>
              </p>
              <p class='field'>
                <button type="submit" class="button" name="btnSend" value="<?=$id?>">Kirim</button>
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