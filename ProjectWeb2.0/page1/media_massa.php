<?php
  //require_once("koneksi.php");
  require_once("connection.php");  
  session_start();
?>        
<?php    
  $bahasa = 1;
  if (isset($_SESSION['bahasa'])) {
    $bahasa = $_SESSION['bahasa'];
  }
  else{
    $bahasa = 1; 
  }
?>

<style>
  #bagian-media-massa{
    border: 1px solid black;
    height: 90vh;
    width: 100%;
    position: relative;
    margin-top: 65%;
  }
  #content-berita-agenda{
    position: relative;
    border:1px solid black;
    margin-top: 70px;
  }
  * {   
   font-family: sans-serif;
  }  
</style>    
  <div class="col-md-12" id="bagian-media-massa">
    <div class="row">

     <div class="col-md-8">        
       <nav id="nav-menu-pilih"> 
        <ul class="list-inline">
          <div class="col-md-4" style="float: left;">
            <li>
              <button type="button" style="width:100%; height: 10vh;" onclick="pilihacara(1)" class="btn btn-warning"><span style="font-weight: bold; font-size: 36px;">Berita</span></button>
            </li>
          </div>
          <div class="col-md-4" style="float: left;">
            <li>
              <button type="button" style="width:100%; height: 10vh;" onclick="pilihacara(2)" class="btn btn-danger"><span style="font-weight: bold; font-size: 36px;">Agenda</span></button>
            </li>
          </div>
        </ul>
       </nav>
       <div id="content-berita-agenda"></div>
     </div>
      
      <div class="col-md-4">
        <div id="content-media">
          <h1>MEDIA MASSA</h1>
          <?php
            $query = mysqli_query($conn, "SELECT * FROM acara WHERE kategori ='2'");
            while ($row = mysqli_fetch_array($query)) {
              echo "<div id='isi'>
  <a href='DetailKegiatan.php?acara=".$row['id_acara']."'>".$row['judul_'.$bahasa]."</a><p>".substr($row['deskripsi_'.$bahasa],0,32)."</p></div>";            
            }
          ?>
        </div>
      </div>
    </div>          
  </div> 
  <script>
    function pilihacara(ind){          
      $.post("ajax_media.php",{mode: "media",t1: ind},
        function(result){                    
          $("#content-berita-agenda").html(result);
        }
      );
    }
  </script>  