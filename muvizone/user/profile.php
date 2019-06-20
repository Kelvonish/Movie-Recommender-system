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

  $username=$_SESSION['username'];

   $sql="SELECT * FROM userdata WHERE Email='$username' OR Username= '$username'";
   $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
   $name = $row['Username'];
  $email = $row['Email'];
  $fullname= $row['Fullname'];
  $genre= $row['genre'];

if (isset($_POST['change'])) {
$password= mysqli_real_escape_string($con,$_POST['pass1']);
$password=sha1($password);
  $sql="SELECT * FROM userdata WHERE  Pass= '$password'";
  $result=mysqli_query($con,$sql);
  if ($result->num_rows>0) {

$password2= mysqli_real_escape_string($con,$_POST['pass2']);
$password3= mysqli_real_escape_string($con,$_POST['pass3']);
if ($password2==$password3) {
  $password2=sha1($password2);
$sql2="UPDATE users SET password='$password2' WHERE username='$name'";
$result2=mysqli_query($con,$sql2);
if ($result2) {
  $text="<p style='color:green;'> &#10004 Password changed successfully</p>";
}
else {
  $text="<p style='color:red;'>Password change failed</p>";
}
}
else {
  $text="<p style='color:red;'>New passwords does not match</p>";
}

}
else {
  $text="<p style='color:red;'>Wrong password </p>";
}
}

?>

 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>profile details</title>

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     <title>user profile</title>
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="../css/style.css">
     <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Merienda|Merienda+One" rel="stylesheet">
   </head>
<body style="color:white">
<?php include('menu.php'); ?>


     <center>
 <br>
 <br>
 <br>
 <div>
 <style media="screen" rel="text/stylesheet">

 }
 p,h2{
   text-align: left;
 }
 #change{
   border-style: solid;
    border-width: 2px;
    border-radius: 3px;
 }

 </style>
<div class="row">
<div class="col-md-4">

</div>
  <div class="col-md-4">


 <div id="change">
   <h2 ><i class="fas fa-users fa-3x"></i>  Profile details</h2>
  <p> <i class="fas fa-user fa-2x"></i> Username: <?php echo $name ?> </p>
  <p> <i class="fas fa-envelope fa-2x"></i> Email: <?php echo $email ?> </p>
  <p> <i class="fas fa-user-secret fa-2x"></i> Full name: <?php echo $fullname ?></p>
    <p> <i class="fas fa-envelope fa-2x"></i> Preferred Genre: <?php echo $genre ?> </p>
 </div>
 <br>
 <br>
 <div class="form-group " id="change">
   <form action="profile.php" method="post">
<h2>Changing password</h2>
     <div class="alert">
       <?php echo $text ?>
     </div>
     <label for="password">Current Password</label>
   <input type="password" class="form-control" name="pass1" value="" required>
   <label for="password">New Password</label>
   <input type="password" class="form-control" name="pass2" value="" required>
   <label for="password">Confirm new Password</label>
   <input type="password"  class="form-control" name="pass3" value="" required>
   <br>
   <input type="submit" name="change" value="Change Password" class="btn btn-block btn-danger">
   <form>
 </div>
 </div>

 <center>

<center>

 <div class="row" id="contu">

 </div>
</center>
  </div>

</div>



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
 </html>
