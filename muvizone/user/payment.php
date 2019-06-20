<?php
session_start();
  $message="";
/*if (isset($_POST['verify'])) {
$code=$_POST['code'];
$_SESSION['code']=$code;
if (strlen($code)>=9) {
  $message="<p style='color:white;'> <br> <br> <br> <br> <br> &#10004 Payment successful <a href='ticket.php' class='btn btn-success'>check receipt</a></p>";
}
else {
  $message="<p style='color:red;'> <br> <br> <br> <br> <br>Mpesa code invalid. Mpesa code should have more than 9 characters <a href='payment.php' class='btn btn-danger'>try again</a> </p>";
}*/
if (isset($_POST['sub'])) {
  $seat=$_POST['seat'];
  $_SESSION['seat']=$seat;
$price=$_SESSION['price'];
$amount=$seat*$price;
$_SESSION['amount']=$amount;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
  </head>
  <body id="many">
<?php
include('menu.php');
 ?>

    <style media="screen" rel="text/stylesheet">

    #many{
      background-image: url('../image/back2.jpg');
      color: white;
    }
    #mess{
      color: green;
    }
    </style>
<div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-4">
    <h3>Payments are done via mpesa</h3>
    <img src="../image/mpesa.png" alt="" height="200px;">
    <p>Paybill:0706783609</p>
    <p>Account number:Your number#<?php echo $_SESSION['name']; ?></p>
    <p>Amount:<?php echo $_SESSION['amount']; ?> </p>
    <p>Enter your Mpesa pin</p>
    <div>
      <p id="mess"> <?php echo $message;
      //echo "<a href=''>check receipt</a>";?>  </p>
    </div>
    <form class="form-group" action="ticket.php" method="post" >
      <input type="text" name="code" value="" placeholder="Enter your mpesa confirmation code eg MQSA23FGTCD" required size="50" class="form-control" autocomplete="off" placeholder="eg MQSA23FGTCD">
      <br> <br>
    <p>  <input type="submit" name="verify" value="Verify payment" class="btn btn-success btn-block"></p>
    </form>
  </div>
  </div>

    <center>


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      </body>

  </body>
</html>
