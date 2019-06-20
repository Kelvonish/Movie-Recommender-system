
<?php
session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
    } else {
        header('location: ../user/index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to MUVIzone</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/popup.css">

</head>

<body>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="../index.php" style="color:red;">
          Muvizone
        </a>
  <button class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar"><span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Links -->
        <ul class="navbar-nav mr-auto">

        </ul>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#popup1">Log In</a>
            </li>
        </ul>
      </div>
    </nav>

    <!-- Pop up boxes for login and registration -->
    <div id="popup1" class="popup-overlay">
        <div class="log-popup">
            <h2>Log In</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <form action="../controller/login.php" method="post">
                    <i class="fa fa-user icon"></i>
                    <input type="text" placeholder="Username" name="username" class="log-input" required>
                    <br>
                    <i class="fa fa-lock icon"></i>
                    <input type="password" placeholder="Password" name="password" class="log-input" required>
                    <br>
                    <input type="submit" value="Log In" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>

    <div id="popup2" class="popup-overlay">
        <div class="log-popup">
            <h2>Sign Up</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <form action="../controller/register.php" method="post">
                    <i class="fa fa-user icon" id='icon'></i>
                    <input type="text" placeholder="Enter your name" name="fullname" class="log-input" required id="in">
                    <br>
                    <i class="fa fa-envelope icon"id='icon'></i>
                    <input type="email" placeholder="Enter your email" name="email" class="log-input" required id="in">
                    <br>
                    <i class="fa fa-link icon"id='icon'></i>
                    <input type="text" placeholder="Enter username" name="username" class="log-input" required id="in">
                    <br>
                    <i class="fa fa-lock icon"id='icon'></i>
                    <input type="password" placeholder="Password" name="password" class="log-input" required id="in">
                    <br>

                    <label for="genre"><h5>Choose your favourite genre</h5></label>
                    <p>  <input type="radio" name="genre" value="comedy" > Comedy
                      <input type="radio"  name="genre" value="horror"> Horror
                      <input type="radio" name="genre" value="animation"> Animation
                      <input type="radio" name="genre" value="action"> Action</p>
                      <h5>What's your age bracket?</h5>
                      <p><input type="radio" class="form-check-input" name="age" value="0">
                      <label class="form-check-label" >Under 15 years</label>
                    <p>  <input type="radio" class="form-check-input"  name="age" value="1">
                      <label class="form-check-label">Over 15 years </label></p>

                    <input type="checkbox" name="chkbox" required> I agree to Terms and Conditions
                    <br>
                    <input type="submit" value="Sign Up" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>
    <style media="screen">
    @media only screen and (max-width: 600px) {
#popup2{
  font-size: 10px;
}
#in{
  height: 20px;
    font-size: 15px;
}
#icon{
  height: 20px;
}
}
    </style>
    <div id="success" class="popup-overlay">
        <div class="log-popup">
            <h2>Success</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>Acoount is created Successfully.Now you can login your account :)</p>
                <a href="#popup1" class="btn-main btn-main-primary">
                        Log In
                </a>
            </div>
        </div>
    </div>
    <div id="error" class="popup-overlay">
        <div class="log-popup">
            <h2>Error</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>Username or Email already exist :( Try Again...</p>
            </div>
        </div>
    </div>
    <div id="error1" class="popup-overlay">
        <div class="log-popup">
            <h2>Error</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <p>Invalid details</p>
            </div>
        </div>
    </div>
    <!-- End of Pop up boxes for login and registration -->



    <header style="background-image:image/background.jpg;">
        <div class="container body">
            <center>
                <div class="inner-body ">
                    <h1 class="title ">Welcome to
                        <span style="color: red ">MUVIzone</span>
                    </h1>
                    <p style="color: white" class="content">
                     It is site where you can view information about your favourite movie.<br>
                      Login or signup to use our service.
                    </p>
                </div>
                <div class="container">
                    <a href="#popup1" class="btn-main btn-main-primary">
                        Log In
                    </a>
                    <a href="#popup2" class="btn-main">
                        Sign Up
                    </a>
                </div>

            </center>
        </div>
    </header>



    <div class="footer">
        <p>&copy; Copyright MUVIzone 2019</p>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="../js/main.js"></script>
    <script>
        getTopMovies();
    </script>
</body>

</html>
