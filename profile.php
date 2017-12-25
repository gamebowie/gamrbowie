<!DOCTYPE html>
<html lang="TH-th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css.css">
    <title>Burnyourself</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top eng">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="navbar-brand" href="homepage.php">
                <img src="img/bicycle(1).png" width="30" height="30" class="d-inline-block align-top">
                BURN YOUR SELF . . .
                </a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                <a class="nav-link" href="#">
                Burn Diary
                </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_COOKIE["username"];?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="index.html">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">LOGOUT</button>
            </form>
        </div>
    </nav>

    <?php
    require 'cont.php';

    $User = $_COOKIE["username"];

    $sql = "SELECT * FROM user WHERE username='$User' ";
    $result = mysqli_query($connector, $sql);
    $row = mysqli_fetch_array($result);
    extract($row);
   ?>

    <div class="container-fluid" style="padding-top:70px;padding-bottom:70px">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 box eng">
            <form action="check-add-profile.php" method="post">
                <h3>Profile</h3>
                <div class="form-group">
                    <label for="fname">Firstname :</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname; ?>" >
                </div>
                <div class="form-group">
                    <label for="lname">Lastname :</label>
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname; ?>" >
                </div>
                <div class="form-group">
                    <label for="gender">Age :</label>
                    <input type="text" class="form-control" id="age" name="age" value="<?php echo $age; ?>" >
                </div>
                <div class="form-group">
                    <label for="age">Gender :</label>
                    <select class="form-control" id="gender" name="gender" value="<?php echo $gender; ?>" >
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hei">Height :</label>
                    <input type="text" class="form-control" id="hei" name="hei" value="<?php echo $hei; ?>" >
                </div>
                <div class="form-group">
                    <label for="wei">Weight :</label>
                    <input type="text" class="form-control" id="wei" name="wei" value="<?php echo $wei; ?>" >
                </div>
                <button type="submit" class="btn btn-warning">Add Profile</button> 
            </form>
        </div>
       <div class="col-sm-4"></div>
    </div>
    </div>
</body>
</html>