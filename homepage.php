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
                <a class="nav-link" href="diary.php">
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
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4>/</h4>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-sm-6 coodbox eng text-center">
            <a class="nav-link" href="bic.php?time=0&&call=0">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/thomas-gamstaetter-272250.jpg" class="w3-hover-grayscale">
                <div class="carousel-caption">
                    <h3>Add Calorie Diary</h3>
                </div>   
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-6 coodbox eng text-center">
            <a class="nav-link" href="show-profile.php">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/clem-onojeghuo-143620.jpg" class="w3-hover-grayscale">
                <div class="carousel-caption">
                    <h3>Profile</h3>
                </div>   
                </div>
            </div>
            </a>
        </div>
    </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 eng text-center">
            <a class="nav-link" href="diary.php">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/marion-michele-191320.jpg"  class="w3-hover-grayscale">
                <div class="carousel-caption">
                    <h3>Burn Diary</h3>
                </div>   
                </div>
            </div>
            </a>
        </div>
        <div class="col-sm-6 eng text-center">
            <a class="nav-link" href="index.html">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/linda-xu-100716.jpg" class="w3-hover-grayscale">
                <div class="carousel-caption">
                    <h3>Logout</h3>
                </div>   
                </div>
            </div>
            </a>
        </div>
    </div>
    </div>  
</body>
</html>