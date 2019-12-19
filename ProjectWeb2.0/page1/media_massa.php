<?php
  //require_once("koneksi.php");
  require_once("connection.php");  
  // session_start();
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
    #bagian-berita{
      position: absolute;      
      top: 50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%) ;
    }
   #menu-1 , #menu-2 ,#menu-3{
      display: inline-block;
    }
    #menu-1 a, #menu-2 a , #menu-3 a{
      text-decoration: none;
      display: inline-block;
      color: black;
      font-family: arial;
      font-weight: lighter;
      font-size: 40px;
      padding: 0 28px;
    }
    .cool-link::after{
      content: '';
      display: block;
      width: 0px;
      height: 2px;
      border: 5px solid white;    
      transition: width .3s;
    }
    .cool-link:hover::after{
      border: 5px solid black;            
      width: 100%;        
      transition: width .3s;        
    }
  #bagian-media-massa{    
    height: 99vh;
    width: 100%;
    position: relative;
    margin-top: 12%;        
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
  #content-media{
    /*padding-bottom: 10px;*/
  }
  </style>  
  <div class="container" style="clear:both">
  <div class="col-md-12" id="bagian-media-massa" >
    <div class="row">   
      <div class="col-md-8">
        <div class="container" id="bagian-berita">
          <li id="menu-2"><a onclick="pilihacara(1)" class="cool-link">Berita</a></li>
          <li id="menu-1"><a onclick="pilihacara(2)" class="cool-link">Agenda</a></li>          
          <div id="content-berita-agenda"></div>   
        </div>
      </div>  
      <div class="col-md-4">
        <div id="content-media">
          <li id="menu-3"><a class="cool-link">MEDIA MASSA</a></li>
          <?php
            $query = mysqli_query($conn, "SELECT * FROM acara WHERE kategori ='2'");
            while ($row = mysqli_fetch_array($query)) {
              echo "<div id='isi'>
  <a href='Fabian/DetailKegiatan.php?acara=".$row['id_acara']."'>".$row['judul_'.$bahasa]."</a><p>".substr($row['deskripsi_'.$bahasa],0,32)."</p></div>";            
            }
          ?>
        </div>
        </div>   
    </div>    
  </div>    
  </div>
  <script>        
  pilihacara(1);
    function pilihacara(ind){    
      $.post("ajax_media.php",{mode: "media",t1: ind},
        function(result){                                
          $("#content-berita-agenda").html(result);          
        }
      );
    }    
  </script>  