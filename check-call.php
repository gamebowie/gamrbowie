<?php
    require 'cont.php';
    
    $user = $_COOKIE["username"];

    $act = $_POST["act"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $call = $_POST["call"];
    $brun = $_POST["brun"];

    $query = "INSERT INTO today
    VALUES (
            '',
            '$user',
            '$date',
            '$time',
            '$call',
            '$brun',
            '$act'
        )";

    header ("Location: suc-aad.html");
 /*   $objQuery = mysqli_query($connector, $strSQL); */
?>