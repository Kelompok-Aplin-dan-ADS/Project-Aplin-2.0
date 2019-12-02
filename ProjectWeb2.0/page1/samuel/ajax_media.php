<?php  
	require_once("koneksi.php");
?>
<?php  
	if ($_POST['mode'] == "media") {
		$t1 = $_POST['t1'];
		if ($t1 == "1") {	
			///// aku lempar ke detailberita.php nah nanti waktu dek file yang itu kalau berita_bahasa_id ne kalau sama yang tak kirim idnya maka muncul kan sesuai 		
			$query1 = mysqli_query($conn ,"SELECT acara.id_acara, acara.gambar, acara.judul , acara.deskripsi , acara.kategori , acara.jurusan FROM acara WHERE kategori ='$t1' AND id_acara = '$t1'");
			$query3 = mysqli_query($conn ,"SELECT acara.id_acara, acara.gambar, acara.judul , acara.deskripsi , acara.kategori , acara.jurusan FROM acara WHERE NOT id_acara = '$t1' AND kategori ='$t1'");

			echo "<div class='row'>";
				echo "<div class='col-md-12'>";		
					echo "<div class='col-md-6' style='float:left;'>";							
			while ($row = mysqli_fetch_array($query1)) {								
						echo "<div id='foto'><img src='".$row['gambar']."' style='background-size: 100% 100%;' class='card-img-top h-100' alt='error'></div>";	
						echo "<div id='isi'><a href='detailberita.php?id=".$row['id_acara']."'>".$row['judul']."</a></div>";
						echo "<div id='content'>".$row['deskripsi']."</div>";
			}			
					echo "</div>";
					echo "<div class='col-md-6' style='float:left;'>";	
			while ($row = mysqli_fetch_array($query3)) {														
						echo "<div id='isi'><a href='detailberita.php?id=".$row['id_acara']."'>".$row['judul']."</a></div>";
			}
					echo "</div>";
				echo "</div>";
			echo "</div>";
		}		
		else if($t1 == "2"){
			$query2 = mysqli_query($conn , "SELECT acara.id_acara, acara.judul , acara.deskripsi , acara.kategori , acara.jurusan FROM acara WHERE kategori ='$t1'");
			echo "<div class='col-md-6'>";
			while ($row = mysqli_fetch_array($query2)) {			
				echo "<div id='isi'><a href='".$row['id_acara']."'>".$row['judul']."</a></div>";
			}			
			echo "</div>";
		}
	}
?>