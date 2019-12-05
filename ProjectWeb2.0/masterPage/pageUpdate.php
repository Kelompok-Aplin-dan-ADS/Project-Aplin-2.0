<?php
    require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <title>Update Event</title>
  <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="themeCss.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
    <div id="wrapper">
	    <!-- Sidebar -->
		<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li><a href="index2.php">Insert Event</a> </li>
			<li><a href="pageUpdate.php">Update Event</a> </li>
			<li><a href="inputDosen.php">Insert Dosen</a></li>
			<li><a href="pageDosenUpdate.php">Update Dosen</li>
			<li><a href="inputMatkul.php">Insert Mata Kuliah</a></li>
			<li><a href="pageUpdateMatkul.php">Update Mata Kuliah</a></li>
			<li><a href="tag/insertTag.php">Insert Tag</a></li>
			<li><a href="index.php" name="logout">Logout</a></li>
		</ul>
		</div>
	    
	    <!-- Page Content -->
	    <div id="page-content-wrapper">
	      <div class="container-fluid">
	        <div class="row">
	          <div class="col-lg-12">
	            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
	            <div class="inputan" style="display: table-row;">
        <span class="h1" style="color:white;">Halaman Edit Acara</span> <br> <br>
        <div class="table" style="color:white;"></div>
        <p class='field required'>
	        <label class='label' for='cari'>bukan yang ada anda cari?</label>
	        <input class='text-input' id='' name='eventName' placeholder="Judul Acara" required type='text'>
	        <button id="btnSearch">Cari</button>
	    </p>
    </div>
    <div class="result" style="display: table-row; color: white;"></div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
</body>
</html>
<script src="jquery3.4.js"></script>
<script src="search.js"></script>
<script src="scriptTheme.js"></script>
<script>
    getTable();
    setInterval(() => {
        getTable();
    }, 1000);
    function getTable(){
        $.ajax({
            method: "get",
            url: "tableTop5.php",
            success: function (response) {
                $(".table").html(response);
            }
        });
    }
</script>