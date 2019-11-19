<?php  
	$server = "localhost";
	$nama = "root";
	$pass ="";
	$dtbase ="project-aplin-2.0";
	$conn = mysqli_connect($server,$nama,$pass,$dtbase);
	if (!$conn) {		
		die;
	}
?>