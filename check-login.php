<?php
    require 'cont.php';

    $username = $_POST["name"];
    $password = $_POST["pwd"];

    $checklogin = "SELECT COUNT(*) FROM user WHERE username='$username' AND pass='$password';";
    $query = mysqli_query($connector, $checklogin);

    while ($recond = mysqli_fetch_array($query)) {
      if ($recond[0] == 1) {
        ob_start();
        setcookie("username",$username,time()+3600);
        ob_end_flush();
        header ("Location: homepage.php");
      }
      else {
        echo "<script type='text/javascript'>";
      	echo "alert('Username หรือ password ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง');";
        echo "window.location = 'login.html'; ";
      	echo "</script>";
      }
    }

?>
