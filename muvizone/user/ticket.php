
<?php
session_start();
$name="";
$movie="";
$time="";
$seat="";
$amount="";

 ?>
<html>
<head>
  <title>receipt</title>
  <link rel="stylesheet" type="text/css" href="ticket.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merienda|Merienda+One" rel="stylesheet">


    <style type="text/css">
  		.content{

  		}
      </style>
</head>
<body id="many">
<?php
include('menu.php');
 ?>




  <center>


<div class="content">
<div class="row">
<div class="col-md-4">

</div>
<div class="col-md-4" id="ticket">

<center><img src="../image/logo.png"></center>
<p>Name: <?php  $name=$_SESSION['username'];
echo $name; ?></p>
<p>Movie name: <?php $movie=$_SESSION['name'];
echo $movie;?>
</p>
<p>No of seats:<?php $seat=$_SESSION['seat'];
echo $seat;
 ?></p>
 <p>Day: <?php $day=$_SESSION['day'];
 echo $day; ?></p>
<p>Time: <?php $time=$_SESSION['time'];
echo $time; ?></p>
<p>Ticket No:<?php $no=rand();
echo $no; ?></p>
<p>Amount paid: <?php $amount= $_SESSION['amount'];
echo $amount;
?></p>

<style media="screen" rel="text/stylesheet">

#many{
  color: white;
}
#ticket{
  border-width: medium;
  border-style: outset;
  border-color: green;
  background-color: #222;
}

</style>

<center>
  <p>Copyright 2019 &copy; Muvizone</p>
  </center>
</div>
</center>
</div>
<?php

//storing the information
$servername="localhost";
$user="root";
$pass= "";
$database= "moviesinfo";
$text="";
//$message="";
$con=mysqli_connect($servername,$user,$pass) or
 die("not connected");

mysqli_select_db($con,$database)or
die("could not select database");

$name=mysqli_real_escape_string($con,$name);
$movie=  mysqli_real_escape_string($con,$movie);
$seat= mysqli_real_escape_string($con,$seat);
$time= mysqli_real_escape_string($con,$time);
$no= mysqli_real_escape_string($con,$no);
$amount=  mysqli_real_escape_string($con,$amount);


$sql="INSERT INTO tickets(name,movie_name,seats,time,ticket_no,amount_paid,day)
      VALUES('$name','$movie', '$seat','$time','$no','$amount','$day')";

  $query=mysqli_query($con,$sql);


if ($query) {
  echo" &#10003 Thank you. Enjoy your movie";
}
else {
echo "error";

}

 ?>
 <div>


     <div class="footer">
         <p>&copy; Copyright MUVIzone 2019.</p>
     </div>

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

 	<!-- <script type="text/javascript">


     	$(".preload").fadeOut(5000, function(){
         $(".content").fadeIn(500);
 		}); -->

 	</script>


 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
 <script src="js/slick.js"></script>
 <script src="js/main.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
