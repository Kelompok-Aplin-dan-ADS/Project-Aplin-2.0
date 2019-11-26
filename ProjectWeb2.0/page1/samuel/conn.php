<?php  
	$server = "localhost";
	$nama = "root";
	$pass ="";
	$dtbase ="sttsedunew";
	$conn = mysqli_connect($server,$nama,$pass,$dtbase);
	if (!$conn) {
		die;
	}
?>