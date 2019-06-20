<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
}
else{
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Information</title>

    <link rel="stylesheet" href="../css/movie.css">
      <link rel="stylesheet" href="../css/style4.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <?php  include('menu.php');
  ?>


    <div class="container">
        <div id="movie"></div>
    </div>
    <div class="container">
      <h1 class="mt-3 mb-3" style="color:white">Similar movies recommended for you  <?php echo $_SESSION['username']; ?></h1>
        <div id="movies" class="row"></div>

    </div>
    <div class="container-fluid body">
      <div class="container">
        <div class="row">
            <div id="reviews"></div>
        </div>
      </div>
    </div>

    <div class="footer">
        <p>&copy; Copyright MUVIzone 2019.</p>
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
        getMovie();
        getReviews();

    </script>
</body>

</html>
