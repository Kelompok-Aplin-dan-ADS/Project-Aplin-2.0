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
    height: 99vh;
    width: 100%;
    position: relative;
    margin-top: 10%;        
  }  
  * {   
   font-family: sans-serif;
  }    
  #content-berita-agenda{
    position: relative;
    margin-top: 1%;
    width: 100%;
    height: 80vh;
    border-radius: 3%;
    z-index: 5;            
  }
  </style>  
  <div class="container">
  <div class="col-md-12" id="bagian-media-massa" >
    <div class="row">   
      <div class="col-md-8">
        <div class="container" id="bagian-berita">
          <ul class="nav nav-tabs">
            <li class="nav-item" class="tekan">
              <a class="nav-link active" onclick="pilihacara(1)"><p>Berita</p></a>
            </li>
            <li class="nav-item" class="tekan">
              <a class="nav-link" onclick="pilihacara(2)"><p>Agenda</p></a>
            </li>          
          </ul>       
          <div id="content-berita-agenda"></div>   
        </div>
      </div>  
      <div class="col-md-4">
        <div id="content-media">
          <h2>MEDIA MASSA</h2>
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
  </div>
  <script>    
    // $(document).ready(function(){
    //   $(".tekan").show("slow",1000 , function(){
    //     pilihacara(ind);
    //   });
    // });
    function pilihacara(ind){    
      $.post("ajax_media.php",{mode: "media",t1: ind},
        function(result){                                
          $("#content-berita-agenda").html(result);          
        }
      );
    }    
  </script>  