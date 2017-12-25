<?php
  require 'cont.php';

  $query = "SELECT * FROM today";
  $result = mysqli_query($connector, $query);
?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="container-fluid" style="padding-top:70px;padding-bottom:70px">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 box eng">
            <table class="table">
                <tr>
                    <th>Date</th>
                    <th>Long Time</th>
                    <th>Activities</th>
                    <th>Burn/kgcall</th>
                    <th>To day burn/kgcall</th>
                </tr>
                <tbody>
                <?php while ($record = mysqli_fetch_array($result)) { ?>
                  <tr>
                    <td><?php echo $record["date"]; ?></td>
                    <td><?php echo $record["time"]; ?></td>
                    <td><?php echo $record["act"]; ?></td>
                    <td><?php echo $record["ca"]; ?></td>
                    <td><?php echo $record["br"]; ?></td>
                  <!--  <td width="50" style="text-align: center"><a href="DeleteData.php?id=$array[id]">
                    <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td> -->
                  </tr>
                <?php } ?>
              </tbody>
            </table>
        </div>
        <div class="col-sm-2"></div>
    </div>
    </div>
</body>
</html>