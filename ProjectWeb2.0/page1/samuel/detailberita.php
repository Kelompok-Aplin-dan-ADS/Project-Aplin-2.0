<?php
	require_once("koneksi.php");
?>
<?php  
	if (isset($_REQUEST['id'])) {
		$catchId = $_REQUEST['id'];			
		$flag=0;
		echo $catchId."<br>";			
		$query = mysqli_query($conn, "SELECT * FROM acara WHERE id_acara='$catchId'");
		while ($row = mysqli_fetch_array($query)) {	
			echo $row['deskripsi'];
		}		
	}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="jquery.js"></script>
	<title>Halaman Detail</title>
</head>
<body>
	<?php  

	?>
</body>
</html>