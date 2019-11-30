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
    	#content-berita-agenda,#content-media{
    		border: 1px solid black;
    		height: 70vh;
    	}
    </style>
	<title>Halaman Media Massa</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">				<!-- #943434-->
				<button type="button" style="width: 50%;"  id="bagian1" onclick="pilihacara(1)" class="btn">Berita</button>
				<button type="button" style="width: 49%;" id="bagian2" onclick="pilihacara(2)" class="btn">Agenda</button>
			</div>			
			<div id="content-berita-agenda" class="col-md-8">
				
			</div>
			<div class="col-md-4">
				<div id="content-media">
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script>
	function pilihacara(ind){
		$.post("ajax_media.php",{mode:"media" , t1:ind},
			function(result){				
				$("#content-berita-agenda").html(result);
			}
		);
	}
</script>