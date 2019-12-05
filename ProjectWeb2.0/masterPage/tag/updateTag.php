<?php
    require("../config.php");


    if(isset($_POST["btnAdd"])){
        $id = $_GET["id"];
        $tag1 = $_POST["tag_1"];
        $tag2 = $_POST["tag_2"];
        $query = "UPDATE tag SET tag_nama_1='$tag1',tag_nama_2='$tag2' WHERE tag_id = '$id'";
        $conn->query($query);
        header("location: insertTag.php");
    }
    else{
        $id = $_GET["id"];
        $query = "SELECT * FROM tag WHERE tag_id = $id";
        $temp = $conn->query($query);
        $tags = mysqli_fetch_assoc($temp);

        $tag1 = $tags['tag_nama_1'];
        $tag2 = $tags['tag_nama_2'];
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Tag</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="../themeCss.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
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
            <form action="#" method="post" class="form">
              <p class="field">
                <label class='label' for='title' style="font-size: 30pt;">Update Tag</label>
              </p>  
              <p class="field half required">
                  <label for="newTag" class="label required">Tag Indonesia</label>
                  <input type="text" class="text-input" name="tag_1" id="" value="<?=$tag1?>">
              </p>
              <p class="field half">
                  <label for="newTag" class="label">Tag Inggris</label>
                  <input type="text" name="tag_2" class="text-input" id="" value="<?=$tag2?>">
              </p>
              <p class='field'>
                <input class='button' type='submit' name="btnAdd" value='Kirim'>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<script src="../jquery3.4.js"></script>
<script src="../scriptTheme.js"></script>