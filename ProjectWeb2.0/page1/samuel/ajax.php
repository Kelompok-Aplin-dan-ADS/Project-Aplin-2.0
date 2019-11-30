<?php  
	require_once("koneksi.php");
?>
<?php  
	$no = 0; 
	if ($_POST['mode'] == "pindahan1") {	
		$t1 = $_POST['t1'];
		$query = mysqli_query($conn,"SELECT * FROM acara WHERE jurusan='$t1'");		
		while($row = mysqli_fetch_array($query)){		
			if ($row['jurusan'] == $t1) 
			{
				if($no == 0) {
					echo "<div class='row'>";					
				}
				echo "<div class='col-md-6'>";
					echo "<div class='card hoverCard' style='max-width:450px;'>";
						echo "<div class='row no-gutters'>";
							echo "<div class='col-md-4'>";
			                    echo "<img src='".$row['gambar']."' class='card-img-top h-100' alt='error'>";
			                echo "</div>";
			                echo "<div class='col-md-7'>";
			                    echo "<div class='card-body'>";
			                        echo "<span class='card-title text-primary'>".$row['judul']."</span>";
			                        echo "<p class='card-text'>".substr($row['deskripsi'],0,59)."</p>";
			                        echo "<a href='card-link'>-READ MORE</a>";
			                    echo "</div>";
			                echo "</div>";
						echo "</div>";
					echo "</div>";	
				echo "</div>"; 
				$no++; 
				if($no == 2) {
					echo "</div>"; 					
					$no = 0; 
				}
			}														
		}
	}
?>