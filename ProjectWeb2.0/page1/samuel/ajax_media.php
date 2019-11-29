<?php  
	require_once("conn.php");
?>
<?php  
	if ($_POST['mode'] == "media") {
		$t1 = $_POST['t1'];
		if ($t1 == "1") {	
			///// aku lempar ke detailberita.php nah nanti waktu dek file yang itu kalau berita_bahasa_id ne kalau sama yang tak kirim idnya maka muncul kan sesuai 		
			$query1 = mysqli_query($conn ,"SELECT berita.berita_foto , berita_bahasa.berita_bahasa_id , berita_bahasa.berita_judul , berita_bahasa.berita_deskripsi FROM berita , berita_bahasa WHERE berita.berita_id = berita_bahasa.berita_id AND berita_bahasa_id='$t1'");
			echo "<div class='col-md-6'>";
			while ($row = mysqli_fetch_array($query1)) {								
				echo "<div id='isi'><a href='detailberita.php?id=".$row['berita_bahasa_id']."'>".$row['berita_judul']."</a></div>";
			}			
			echo "</div>";
		}		
		else if($t1 == "2"){
			$query2 = mysqli_query($conn , "SELECT agenda_bahasa.agenda_judul , agenda_bahasa.agenda_deskripsi FROM agenda_bahasa");
			echo "<div class='col-md-6'>";
			while ($row = mysqli_fetch_array($query2)) {			
				echo "<div id='isi'><a href='".$row['agenda_judul']."'>".$row['agenda_judul']."</a></div>";
			}			
			echo "</div>";
		}
		else if ($t1 == "3") {

		}
		else if ($t1 == "4") {
			echo "4";
		}
		else if ($t1 == "5") {
			echo "5";
		}
	}
?>