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
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4>/</h4>
        </div>
    </div>
    </div>
    <div class="container-fluid" style="padding-top:70px;padding-bottom:70px">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 box eng">
            <form>

            <?php
            $c1 = $_GET['time'];
            $c2 = $_GET['call'];
            ?>
        
                <h3>Calculate Calorie</h3>
                <div class="form-group">
                    <label for="fname">Long time :</label>
                    <input type="text" class="form-control" value="<?php echo($c1) ;?>">
                </div>
                <div class="form-group">
                    <label for="lname">Burn/kgcall :</label>
                    <input type="text" class="form-control" value="<?php echo($c2) ?>">
                </div>
                <div class="form-group">
                    <label for="lname">To day burn/kgcall :</label>
                    <input type="text" class="form-control" value="<?php echo($c1*$c2) ?>">
                </div>
                <button type="button" class="btn btn-dark" onclick="window.location='homepage.php'">Cancel</button>
                <button type="submit" class="btn btn-success">Calculate</button>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
    </div>
    <div id="section1" class="container-fluid bg-secondary" style="padding-top:70px;padding-bottom:70px">
        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 box eng">
            <form action="check-call.php" method="post">
                <h3>Add Calorie Diary</h3>
                <div class="form-group">
                    <label for="fname">Username :</label>
                    <input type="text" class="form-control-plaintext" name="username" id="username" value="<?php echo $_COOKIE["username"];?>">
                </div>
                <div class="form-group">
                    <label for="fname">Activities :</label>
                    <input type="text" class="form-control" name="act" id="act">
                </div>
                <div class="form-group">
                    <label for="fname">Date :</label>
                    <input type="text" class="form-control" name="date" id="date">
                </div>
                <div class="form-group">
                    <label for="fname">Long time :</label>
                    <input type="text" class="form-control" name="time" id="time">
                </div>
                <div class="form-group">
                    <label for="lname">Burn/kgcall :</label>
                    <input type="text" class="form-control" name="call" id="call">
                </div>
                <div class="form-group">
                    <label for="lname">To day burn/kgcall :</label>
                    <input type="text" class="form-control" id="brun" name="brun">
                </div>
                <button type="button" class="btn btn-dark" onclick="window.location='homepage.php'">Cancel</button>
                <button type="submit" class="btn btn-warning">Add</button>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
    </div>
</body>
</html>