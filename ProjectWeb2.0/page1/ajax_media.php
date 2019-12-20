<?php
	require_once("connection.php");	
	session_start();	
	$bahasa=1;
    if(isset($_SESSION["bahasa"])){
        $bahasa=$_SESSION["bahasa"];
    }else{
        $_SESSION["bahasa"]=1;
    }    
?>
<?php
$no = 0;
if ($_POST['mode'] == "media") {	  		      
    $query = mysqli_query($conn,"SELECT * FROM acara WHERE id_acara <=6");
    $no = 0;         
    echo "<h1 id='judul_berita' style='text-align:center;'>BERITA</h1>";
    while ($row = mysqli_fetch_array($query)) {                  
    	if ($no == 0) {
    		echo "<div class='row'>";
    	}    	    	
    	echo "<div class='col-md-4'>";
        echo "<div class='hovereffect'>";
          	echo "<img class='img-responsive' src='".$row['gambar']."' alt='error'>";
          	echo "<div class='overlay'>";
            	// echo "<h2>".$row['judul_'.$bahasa]."</h2>";
            	echo "<p>";
              		echo "<div id='isi'><a href='Fabian/DetailKegiatan.php?acara=".$row['id_acara']."''>".$row['judul_'.$bahasa]."</a></div>";
            	echo "</p>";
          	echo "</div>";
        echo "</div>";             
        echo "</div>";
        $no +=1; 
        if ($no == 3) {
        	echo "</div>";
        	$no = 0;
        }    	
    }        
}
else if ($_POST['mode'] == "agenda") {
	$query = mysqli_query($conn,"SELECT * FROM acara WHERE id_acara >= 7 AND id_acara <= 13");
    $no = 0;         
    echo "<h1 id='judul_berita' style='text-align:center;'>AGENDA</h1>";
    while ($row = mysqli_fetch_array($query)) {                  
    	if ($no == 0) {
    		echo "<div class='row'>";
    	}    	    	
    	echo "<div class='col-md-4'>";
        echo "<div class='hovereffect'>";
          	echo "<img class='img-responsive' src='".$row['gambar']."' alt='error'>";
          	echo "<div class='overlay'>";            	
            	echo "<p>";
              		echo "<div id='isi'><a href='Fabian/DetailKegiatan.php?acara=".$row['id_acara']."''>".$row['judul_'.$bahasa]."</a></div>";
            	echo "</p>";
          	echo "</div>";
        echo "</div>";             
        echo "</div>";
        $no +=1; 
        if ($no == 3) {
        	echo "</div>";
        	$no = 0;
        }    	
    }        
}
else if ($_POST['mode'] == "massa") {
	$query = mysqli_query($conn,"SELECT * FROM acara WHERE id_acara >= 7 AND id_acara <= 13");
    $no = 0;         
    echo "<h1 id='judul_berita' style='text-align:center;'>MEDIA MASSA</h1>";
    while ($row = mysqli_fetch_array($query)) {                  
    	if ($no == 0) {
    		echo "<div class='row'>";
    	}    	    	
    	echo "<div class='col-md-4'>";
    	echo "<p>";
          	echo "<div id='isi' style='width:100%; height:75%;text-align: center;'><a style='color:black;' href='Fabian/DetailKegiatan.php?acara=".$row['id_acara']."''>".$row['judul_'.$bahasa]."</a></div>";
        	echo "</p>";          	                   
        echo "</div>";
        $no +=1; 
        if ($no == 3) {
        	echo "</div>";
        	$no = 0;
        }    	
    }        
}
?>