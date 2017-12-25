<?php

require 'cont.php';

$get =  $_COOKIE["username"] ;

  $Firstname = $_REQUEST["fname"];
  $Lastname = $_REQUEST["lname"];
  $Gender = $_REQUEST["gender"];
  $Age = $_REQUEST["age"];
  $Height = $_REQUEST["hei"];
  $Weight = $_REQUEST["wei"];

$sql = "UPDATE user SET fname='$Firstname' ,
                        lname='$Lastname' ,
                        age='$Age' ,
                        wei='$Weight' ,
                        hei='$Height' 
                        WHERE username='$get' " ;

$result = mysqli_query($connector, $sql);
mysqli_close($connector);

header ("Location: suc-edit.html");

?>