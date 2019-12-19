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
  .hovereffect {
    width: 100%;
    height: 100%;    
    overflow: hidden;    
    text-align: center;
    cursor: default;
  }

  .hovereffect .overlay {
    position: absolute;
    overflow: hidden;
    width: 80%;
    height: 80%;
    left: 10%;
    top: 10%;
    border-bottom: 1px solid #FFF;
    border-top: 1px solid #FFF;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: scale(0,1);
    -ms-transform: scale(0,1);
    transform: scale(0,1);
  }

  .hovereffect:hover .overlay {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }

  .hovereffect img {
    display: block;    
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
  }

  .hovereffect:hover img {
    filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
    filter: brightness(0.6);
    -webkit-filter: brightness(0.6);
  }

  .hovereffect h2 {
    text-transform: uppercase;
    text-align: center;    
    font-size: 17px;
    background-color: transparent;
    color: #FFF;
    padding: 1em 0;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(0,-100%,0);
    transform: translate3d(0,-100%,0);
  }

  .hovereffect a, .hovereffect p {
    color: #FFF;
    padding: 1em 0;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(0,100%,0);
    transform: translate3d(0,100%,0);
  }
  #isi:hover{
    background-color: #007BFF;
    opacity: 0.5; 
    color: black;     
  }
  #isi:visited{    
    color: black;     
  }
  .hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }  
  </style>      
  <div class="container">
    <div id="bagian-dalam" style="clear: both;">

    </div>  
    <div id="bagian-agenda" style="clear: both;">
        
    </div>
    <div id="bagian-media" style="clear: both;">
        
    </div>    
  </div>   
  <script>            
    function munculberita(){
      $.post("ajax_media.php",{mode:"media"},
        function(result){          
          $("#bagian-dalam").html(result);
        }
      );
    }
    function munculmassa(){
      $.post("ajax_media.php",{mode:"massa"},
        function(result){          
          $("#bagian-media").html(result);
        }
      );
    }
    function munculagenda(){
      $.post("ajax_media.php",{mode:"agenda"},
        function(result){          
          $("#bagian-agenda").html(result);
        }
      );
    } 
    munculmassa();
    munculagenda();
    munculberita();
  </script>  