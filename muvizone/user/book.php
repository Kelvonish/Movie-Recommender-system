<?php
session_start();
 ?>

 <?php

 $servername="localhost";
 $user="root";
 $pass= "";
 $database= "moviesinfo";

 $message="";
 $text="";

 $con=mysqli_connect($servername,$user,$pass) or
  die("not connected");

 mysqli_select_db($con,$database)or
 die("could not select database");

if (isset($_POST['1'])) {
  $id="1";
}
elseif (isset($_POST['2'])) {
  $id="2";
}
elseif (isset($_POST['3'])) {
  $id="3";
}
elseif (isset($_POST['4'])) {
  $id="4";
}

 $sql="SELECT * FROM cinema WHERE id='$id'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
 $name = $row['name'];
$time = $row['time'];
$price= $row['price'];
$day=$row['day'];

$_SESSION['name']=$name;
$_SESSION['time']=$time;
$_SESSION['price']=$price;
$_SESSION['day']=$day;

  ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <title></title>
  </head>
  <body style="color:white;">
    <?php
include('menu.php');
     ?>
<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-4" style="  background: #222;">

<table border="4" height="400" width="100%" class="mt-3">
  <tr>
    <td>Cinema</td>
    <td>Muvizone presige cinema</td>
  </tr>
  <tr>
    <td>Theatre number</td>
    <td>III</td>
  </tr>
  <tr>
    <td>Name of Movie</td>
    <td> <?php echo $name; ?> </td>
  </tr>
  <tr>
    <td>Day</td>
    <td> <?php echo $day; ?> </td>
  </tr>
  <tr>
    <td>Time</td>
    <td> <?php echo $time; ?>  </td>
  </tr>
  <tr>
    <td>Price per ticket</td>
    <td> <?php echo $price; ?> </td>
  </tr>
  <tr>
    <td>Type</td>
  <center> <td class="btn btn-danger btn-sm">3D</td></center>
  </tr>

</table>
<form class="" action="payment.php" method="post">
  <label for="seat"><h3>Enter number of seats</h3></label>
<p>  <input type="text" name="seat" value="" class="form-control" required></p>
  <input type="submit" name="sub" value="Proceed to Payment" class="btn btn-outline-success form-control">
</form>
</div>
</div>

<div class="footer" style=".footer {
    text-align: center;
    background: #222;
    color: silver;
    font-size: 16px;
    font-weight: bold;
    padding: 20px 0 10px;
}">
    <p>&copy; Copyright MUVIzone 2019.</p>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  </body>
</html>
