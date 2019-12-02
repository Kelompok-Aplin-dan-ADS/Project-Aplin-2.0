<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	<style>
		.container #judul{
	        position: relative;
	        top: 100px;
	        height: 100px;
	        width: 0;
	        white-space: nowrap;
	        transform: translate(0px,110px);
	        transform: rotate(-90deg);
	        float: left;
	    }
      	.hoverCard:hover{
		    -webkit-box-shadow: 10px 21px 29px -1px rgba(0,0,0,0.75);
		    -moz-box-shadow: 10px 21px 29px -1px rgba(0,0,0,0.75);
		    box-shadow: 10px 21px 29px -1px rgba(0,0,0,0.75);
		    transition: 0.5s ease all;
		}
		.hoverCard{
		    transition: 0.5s ease all;
		}

		.nav-links{
			margin-top:5%;
			height: 8vh; 
			width: 320px; 
			text-align: center;
			padding-top: 17px;
			font-family: courier new;
			background-color: #EAF7FF;
			font-size: 120%;
		}
	</style>
</head>
<body>
	<div class="container" style="clear:both">
		<div class="row">
			<div class="col-md-2">
				<p id="judul">DISCOVER</p>
			</div>			
		</div>		
		<div class="row">
			<div class="col-md-6">
				<h1 style="font-weight: bold;">Your Future Starts Here.</h1>
				<h6>Learn more about our unique study programs.</h6>
			</div>
		</div>
	</div>
	<!--judul ---------------->  
	<div class="container">
		<div class="row">
			<div class="col-md-4">				
				<div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                  <a class="nav-links active" id="11"  onclick="movePage1(11)" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-profile" aria-selected="false">Teknik Informatika</a>
                  <a class="nav-links" id="18" onclick="movePage1(18)" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Sistem Informasi Bisnis</a>
                  <a class="nav-links" id="12" onclick="movePage1(12)" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Teknik Industri</a>
                  <a class="nav-links" id="10" onclick="movePage1(10)" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Teknik Elektro</a>
                  <a class="nav-links" id="14" onclick="movePage1(14)" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Desain Produk </a>
                  <a class="nav-links" id="17" onclick="movePage1(17)" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Desain komunikasi Visual</a>
                </div> 
			</div>
		<!-- ---------------->
			<div id="bagian-1" class="col-md-8">
			</div>				
		</div>		
	</div>				
	<!-- ---------------->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>

<script>
	function movePage1(ind){			
		$.post("ajax.php",{mode: "pindahan1",t1: ind},
			function(result){	
				$("#bagian-1").html(result);
			}
		);
	}
</script>