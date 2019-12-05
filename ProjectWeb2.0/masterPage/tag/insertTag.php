<?php
    require("../config.php");

    $index=0;
    if(isset($_POST["btnAdd"])){
      $newTag_1 = $_POST["newTag_1"];
      $newTag_2 = $_POST["newTag_2"];

      $query = "SELECT * FROM tag WHERE tag_nama_1 = '$newTag_1'";
      $temp = $conn->query($query);
      $jum = mysqli_num_rows($temp);
      if($jum >0){
        echo "Nama tag indonesia sudah ada";
      }
      else{
        $query = "SELECT * FROM tag WHERE tag_nama_2 = '$newTag_2'";
        $temp = $conn->query($query);
        $jum = mysqli_num_rows($temp);
        if($jum>0){
          echo "Nama tag Inggris sudah ada";
        }
        else{
          $query = "SELECT * FROM tag";
          $temp = $conn->query($query);
          $jum = mysqli_num_rows($temp);
          $jum++;
          $query = "INSERT INTO tag VALUES('$jum','$newTag_1','$newTag_2')";
          $conn->query($query);
        }
      }
    }
    else if(isset($_POST["editBtn"])){
      $id = $_POST['editBtn'];
      header("location: updateTag.php?id=$id");
    }

    $query = "SELECT * FROM tag";
    $listTag = $conn->query($query);
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
        <li><a href="../index2.php">Insert Event</a> </li>
        <li><a href="../pageUpdate.php">Update Event</a> </li>
        <li><a href="../inputDosen.php">Insert Dosen</a></li>
        <li><a href="../pageDosenUpdate.php">Update Dosen</li>
        <li><a href="../inputMatkul.php">Insert Mata Kuliah</a></li>
        <li><a href="../pageUpdateMatkul.php">Update Mata Kuliah</a></li>
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
            <form action="#" method="post" class="form">
              <p class="field">
                <label class='label' for='title' style="font-size: 30pt;">Tambah Tag Baru</label>
              </p>
              <p class="field">
                <label class='label' for='title' style="font-size: 20pt;">Daftar Tag yang Sudah Ada</label>
              </p>
              <table border="1" class="field" style="color: white; text-align: center;">
                  <thead>
                    <tr style="width: auto;">
                      <td style="width: 25%;">
                        <label class='label' for='indo' style="font-size: 20pt; padding: 12px;">Indonesia</label>
                      </td>
                      <td style="width: 25%;">
                        <label class='label' for='ing' style="font-size: 20pt; padding: 12px;">Inggris</label>
                      </td>
                      <td style="color:blue;width: 10%;text-align: center;">  
                        <label class='label' for='ing' style="font-size: 20pt; padding: 12px;">Action</label>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      foreach ($listTag as $key => $value) {
                        ?>
                          <tr>
                            <td>
                              <input type="text" class="text-input" name="" value="<?=$value['tag_nama_1']?>" id="<?php echo "tag_1_".$value['tag_id']?>" disabled>
                            </td>
                            <td>
                              <input type="text" class="text-input" name="" value="<?=$value['tag_nama_2']?>" id="<?php echo "tag_2_".$value['tag_id']?>" disabled>
                            </td>
                            <td><button value="<?=$value['tag_id']?>" name="editBtn"class="editBtn button">Edit</button></td>
                          </tr>
                        <?php
                      }
                    ?>
                  </tbody>
                </table>
                
              <p class="field half required">
                  <label for="newTag" class="label required">Tag baru Indonesia</label>
                  <input type="text" class="text-input" name="newTag_1" id="">
              </p>
              <p class="field half">
                  <label for="newTag" class="label">Tag baru Inggris</label>
                  <input type="text" name="newTag_2" class="text-input" id="">
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