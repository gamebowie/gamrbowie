<?php
	require 'cont.php';

  $strSQL = "INSERT INTO user (username,pass,email) 
  VALUES (
      '".$_POST["name"]."',
      '".$_POST["pass"]."',
      '".$_POST["email"]."'
      )";
          if(mysqli_query($connector, $strSQL)){
        $querySelect = "SELECT * FROM today;";
        if($res = mysqli_query($connector, $querySelect)){
            while ($row = mysqli_fetch_array($res)) {
                $myArray[] = $row;
            }
                echo json_encode($myArray);
        }
    }
    else{
        echo "no con";
    }

  $username = $_POST["name"];
  $password = $_POST["pass"];

  $checklogin = "SELECT COUNT(*) FROM user WHERE username='$username' AND pass='$password';";
  $query = mysqli_query($connector, $checklogin);

  while ($recond = mysqli_fetch_array($query)) {
    if ($recond[0] == 1) {
      ob_start();
      setcookie("username",$username,time()+3600);
      ob_end_flush();
      header ("Location: profile.php");
    }
    }
?>
