<?php  
	require_once("koneksi.php");
?>
<?php  
	if ($_POST['mode'] == "pindahan1") {		
		$t1 = $_POST['t1'];				
		$query = mysqli_query($conn,"SELECT acara.*, jurusan.nama_jurusan FROM acara , jurusan WHERE acara.id_jurusan = jurusan.id_jurusan");
		$no = 0; 
		while ($row = mysqli_fetch_array($query)) {
			if ($row['nama_jurusan'] == $t1) 
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
			                        echo "<span class='card-title text-primary'>'".$row['judul']."'</span>";
			                        echo "<p class='card-text'>'".$row['deskripsi']."'</p>";
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
	else if ($_POST['mode'] == "pindahan2") {		
		$t2 = $_POST['t2'];		
		$query = mysqli_query($conn,"SELECT acara.*, jurusan.nama_jurusan FROM acara , jurusan WHERE acara.id_jurusan = jurusan.id_jurusan");
		$no = 0; 
		while ($row = mysqli_fetch_array($query)) {
			if ($row['nama_jurusan'] == $t2) 
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
			                        echo "<span class='card-title text-primary'>'".$row['judul']."'</span>";
			                        echo "<p class='card-text'>'".$row['deskripsi']."'</p>";
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
	else if ($_POST['mode'] == "pindahan3") {		
		$t3 = $_POST['t3'];	
		$query = mysqli_query($conn,"SELECT acara.*, jurusan.nama_jurusan FROM acara , jurusan WHERE acara.id_jurusan = jurusan.id_jurusan");
		$no = 0; 
		while ($row = mysqli_fetch_array($query)) {
			if ($row['nama_jurusan'] == $t3) 
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
			                        echo "<span class='card-title text-primary'>'".$row['judul']."'</span>";
			                        echo "<p class='card-text'>'".$row['deskripsi']."'</p>";
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
	else if ($_POST['mode'] == "pindahan4") {		
		$t4 = $_POST['t4'];
		$query = mysqli_query($conn,"SELECT acara.*, jurusan.nama_jurusan FROM acara , jurusan WHERE acara.id_jurusan = jurusan.id_jurusan");
		$no = 0; 
		while ($row = mysqli_fetch_array($query)) {
			if ($row['nama_jurusan'] == $t4) 
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
			                        echo "<span class='card-title text-primary'>'".$row['judul']."'</span>";
			                        echo "<p class='card-text'>'".$row['deskripsi']."'</p>";
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
	else if ($_POST['mode'] == "pindahan5") {		
		$t5 = $_POST['t5'];
		$query = mysqli_query($conn,"SELECT acara.*, jurusan.nama_jurusan FROM acara , jurusan WHERE acara.id_jurusan = jurusan.id_jurusan");
		$no = 0; 
		while ($row = mysqli_fetch_array($query)) {
			if ($row['nama_jurusan'] == $t5) 
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
			                        echo "<span class='card-title text-primary'>'".$row['judul']."'</span>";
			                        echo "<p class='card-text'>'".$row['deskripsi']."'</p>";
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
	else if ($_POST['mode'] == "pindahan6") {		
		$t6 = $_POST['t6'];
		$query = mysqli_query($conn,"SELECT acara.*, jurusan.nama_jurusan FROM acara , jurusan WHERE acara.id_jurusan = jurusan.id_jurusan");
		$no = 0; 
		while ($row = mysqli_fetch_array($query)) {
			if ($row['nama_jurusan'] == $t6) 
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
			                        echo "<span class='card-title text-primary'>'".$row['judul']."'</span>";
			                        echo "<p class='card-text'>'".$row['deskripsi']."'</p>";
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