<?php

// session_start();
// if (!isset($_SESSION['username'])) {
//     header('location: ../guest/index.php#popup1');
// }

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../guest/index.php');
}
else{
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
    }
}
//$_SESSION['age']='';

if($_SESSION['age']=='0'){
  $_SESSION['pick']='16';
}
elseif ($_SESSION['genre']=='comedy') {
$_SESSION['pick']='35';
}
elseif ($_SESSION['genre']=='animation') {
  $_SESSION['pick']='16';
}
elseif ($_SESSION['genre']=='action') {
  $_SESSION['pick']='28';
}
elseif ($_SESSION['genre']=='horror') {
  $_SESSION['pick']='27';
}

?>
<script type="text/javascript">
  genre = <?php echo $_SESSION['pick']; ?>;
  window.localstorage.setItem('genre',genre);
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Muvizone</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style media="screen">
body{
    font-family: 'Merienda One', cursive;
}
@media only screen and (max-width: 600px) {
  #user {
  font-size: 15px;
  }
}

</style>
<body>

  <?php  include('menu.php');

  ?>
<?php include('carousel.php') ?>
    <div id="demo" class="carousel slide container" data-ride="carousel">
        <div class="ratedMoviesHead">
          <h2 id="user">Recommended for you <?php echo $_SESSION['username']; ?></h2>
            <h4 id="user">&#9733;&#9733;&#9733; Top Rated Movies &#9733;&#9733;</h4>
        </div>
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div id="topMovies1" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies2" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies3" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies4" class="row"></div>
            </div>
            <div class="carousel-item">
                <div id="topMovies5" class="row"></div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="container">
        <center><  <h2 id="user" style="color:white;">Special Recommendation for you  <?php echo $_SESSION['username']; ?></h2></center>
        <div id="movies1" class="row" class="pophome"></div>

    </div>
    <div class="container">
        <center><h2 style="color:white; ">Popular Movies currently </h2></center>
        <div id="movies" class="row" class="pophome"></div>

    </div>





    <div class="footer">
        <p>&copy; Copyright MUVIzone 2019.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
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
        popularMovie();
        popularMovies();
        genre();
    </script>

</body>

</html>
