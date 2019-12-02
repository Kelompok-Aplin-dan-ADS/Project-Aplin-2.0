<?php
    require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel="stylesheet" href="themeCss.css">

</head>
<body>
    <div id="wrapper">
    <!-- Sidebar -->
        <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
            <li><a href="index.php">Insert Event</a> </li>
            <li><a href="pageUpdate.php">Update Event</a> </li>
            <li><a href="inputDosen.php">Insert Dosen</a></li>
            <li><a href="pageDosenUpdate.php">Update Dosen</li>
            <li><a href="inputMatkul.php">Insert Mata Kuliah</a></li>
            <li><a href="pageUpdateMatkul.php">Update Mata Kuliah</a></li>
          </ul>
        </div>
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                <form action="#" method="post" class="form" enctype="multipart/form-data">
                  
                  <p class='field'>
                    <label class='label' for='title' style="font-size: 30pt;">Update Dosen</label>
                  </p>
                  <p class="field half">
                    <label class='label required' for='imgFile'>Cari Dosen</label>
                    <input class='text-input' id='name' name='searchName' placeholder="Co: Pak Agus">
                  </p>
                  <p class="field half">
                    <input type="button" name="" class="btnSearch button" style="position: relative; left: -290px;" value="Cari">
                  </p>
                  <div class="result" style="width: 100%;"></div>
                  <br>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
<script src="jquery3.4.js"></script>
<script src="scriptTheme.js"></script>
<script>
    $(".btnSearch").click(function (e) { 
        $.ajax({
            method: "post",
            url: "Dosen/search.php",
            data:{
                nama: $("input[name=searchName]").val()
            },
            success: function (response) {
                $(".result").html(response);
            }
        });
    });
</script>
