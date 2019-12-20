<?php session_start();
    unset($_SESSION['isLogin']);
?>
<form action="index2.php" method="post">
    Login: <input type="text" name="name" id=""> <br>
    Password: <input type="text" name="pass" id=""> <br>
    <input type="submit" value="Login" name="btnLogin">
</form>