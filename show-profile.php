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
                        <a class="dropdown-item" href="show-profile.php">Profile</a>
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
        <div class="col-sm-3"></div>
        <div class="col-sm-6 eng box">
            <form action="check-edit-pro.php" method="post">
            <h2>My Account</h2>
            <div class="form-group row">
                <label for="iduser" class="col-sm-3 col-form-label">ID User :</label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="iduser" value="<?php echo $iduser; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-3 col-form-label">Username :</label>
                 <div class="col-sm-9">
                    <input type="text" readonly class="form-control-plaintext" id="username" value="<?php echo $username; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email :</label>
                 <div class="col-sm-9">
                    <input type="email" readonly class="form-control-plaintext" id="email" value="<?php echo $email; ?>">
                </div>
            </div><hr>
            <h2>My Profile</h2>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 col-form-label">Firstname :</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-3 col-form-label">Lastname :</label>
                 <div class="col-sm-9">
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-sm-3 col-form-label">Age :</label>
                 <div class="col-sm-9">
                    <input type="text" class="form-control" id="age" name="age" value="<?php echo $age; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-3 col-form-label">Gender :</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" id="gender" name="gender" value="<?php echo $gender; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="wei" class="col-sm-3 col-form-label">Weight :</label>
                 <div class="col-sm-9">
                    <input type="text" class="form-control" id="wei" name="wei" value="<?php echo $wei; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="hei" class="col-sm-3 col-form-label">Height :</label>
                 <div class="col-sm-9">
                    <input type="text" class="form-control" id="hei" name="hei" value="<?php echo $hei; ?>">
                </div>
            </div><hr>
            <button type="button" class="btn btn-dark" onclick="window.location='homepage.php'">Back</button>  
            <button type="submit" class="btn btn-warning">Edit</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
</body>
</html>