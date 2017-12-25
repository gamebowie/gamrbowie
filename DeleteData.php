<?php
  require 'cont.php';

  $id = $_GET['id'];  

  $sql = "DELETE FROM today WHERE id='$id'";
  $result = mysqli_query($connect, $query);
    header("Location: diary.php");
?>