<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
}
else{
    if ($_SESSION['status'] != "admin") {
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
    <title>Welcome to MoviesInfo</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/popup.css">

</head>

<body>
    <?php  include("menu.php")?></a>
    <header>
        <div class="container body ">
            <center>
                <div class=" inner-body ">
                    <h1 class="title ">Welcome to
                        <span style="color: #6AC045;">Admin Panel</span>
                    </h1>
                    <p style="color: white" class="content">
                        Welcome to
                        <span style="font-weight:bold; color: red">Muvizone</span>
                    </p>
                </div>
                <div class="container">
                    <a href="movie.php" class="btn-main btn-main-primary">
                        Cinema Statistics
                    </a>
                    <a href="users.php" class="btn-main ">
                        Manage Users
                    </a>
                </div>

            </center>
        </div>
    </header>

    <div class="footer">
        <p>&copy; Copyright MUVIzone 2019.</p>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>

</html>
