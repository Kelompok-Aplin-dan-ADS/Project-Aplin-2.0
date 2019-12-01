<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="jquery.js"></script>
    <style>
    	#garis{
    		border: 1px solid grey;
    		width: 100%;
    	}
    	#content{
    		border: 1px solid black;
    		height: 70vh;
    	}
    </style>
	<title>Halaman Media Massa</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6" >			<!-- #943434-->
				<button type="button" id="bagian1" onclick="pilihacara(1)" class="btn">Berita</button>
				<button type="button" id="bagian1" onclick="pilihacara(2)" class="btn">Agenda</button>
				<button type="button" id="bagian1" onclick="pilihacara(3)" class="btn">Teknologi</button>
				<button type="button" id="bagian1" onclick="pilihacara(4)" class="btn">Lowongan</button>
				<button type="button" id="bagian1" onclick="pilihacara(5)" class="btn">Abstrak</button>
				<div id="garis"></div>
			</div>
			<div id="content" class="col-md-12">
				
			</div>
		</div>
	</div>
</body>
</html>
<script>
	function pilihacara(ind){
		$.post("ajax_media.php",{mode:"media" , t1:ind},
			function(result){
				$("#content").html(result);
			}
		);
	}
</script>