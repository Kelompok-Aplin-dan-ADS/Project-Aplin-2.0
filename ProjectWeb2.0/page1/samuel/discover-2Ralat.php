<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
	<script src="../bootstrap4/js/bootstrap.min.js"></script>
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
	</style>
</head>
<body>	
		<div class="container" style="clear: both;">
		<div class="row">
			<div class="col-sm-2">
				<p id="judul">DISCOVER</p>
			</div>			
		</div>		
		<div class="row">
			<div class="col-sm-6">
				<h1 style="font-weight: bold;">Your Future Starts Here.</h1>
				<h6>Learn more about our unique study programs.</h6>
			</div>
		</div>
	</div>
	<!--judul ---------------->  
	<div class="container">
		<div class="row">
			<div class="col-sm-3" >
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="margin-top: 10px;">Teknik Informatika</a>
                  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Sistem Informasi Bisnis</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Teknik Industri</a>
                  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Teknik Elektro</a>
                  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Desain Produk </a>
                  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Desain komunikasi Visual</a>
                </div> 
			</div>
		<!-- ---------------->
		<div class="card">
			
		</div>
			<div class="col-sm-4">
				<div class="card hoverCard" style="max-width: 450px;">
					<div class="row no-gutters">
						<div class="col-sm-4">
		                    <img src="../assets/card4.jpg" class="card-img-top h-100" alt="...">
		                </div>
		                <div class="col-md-7">
		                    <div class="card-body">
		                        <span class="card-title text-primary">STUDENT ACTIVITIES</span>
		                        <p class="card-text">BE A PART OF OUR COMMUNITY</p>
		                        <a href="card-link">-READ MORE</a>
		                    </div>
		                </div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card hoverCard" style="max-width: 450px;">
					<div class="row no-gutters">
						<div class="col-sm-4">
		                    <img src="../assets/card4.jpg" class="card-img-top h-100" alt="...">
		                </div>
		                <div class="col-md-8">
		                    <div class="card-body">
		                        <span class="card-title text-primary">STUDENT ACTIVITIES</span>
		                        <p class="card-text">BE A PART OF OUR COMMUNITY</p>
		                        <a href="card-link">-READ MORE</a>
		                    </div>
		                </div>
					</div>
				</div>
			</div>
		</div>		
	</div>			
	<!-- ---------------->
</body>
</html>