
<?php
session_start();

 ?>

<?php
$text="";
include('../controller/connectdb.php');

if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($conn, $_POST['fname']);
$email=  mysqli_real_escape_string($conn,$_POST['email']);
$message= mysqli_real_escape_string($conn,$_POST['message']);


if (empty($name)|| empty($email)||empty($message)){
  die();
}
else{
$sql="INSERT INTO feedback(name,email,message)
      VALUES('$name','$email','$message')";

  $query=mysqli_query($conn,$sql);


if ($query) {
  $text=" &#10003 Thank you for your feedback";
}
else {
  $text="Please enter again";
}
}
}
 ?>









<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact us</title>
  <link rel="stylesheet" href="../css/index.css">
  <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">

  <!-- Latest compiled and minified CSS -->
  <link rel=" stylesheet " href="../css/bootstrap.min.css ">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
 <?php include('menu.php'); ?>

  <!-- CONTACT SECTION -->
  <section id="contact" class="py-3">
      <form method="post" action="contact.php">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <div class="card-body">
          <marquee> <h4>Get In Touch</h4> </marquee>
              <p></p>
              <h4>Address</h4>
              <p>727,Maua</p>
              <h4>Email</h4>
              <p>kelvomyself@gmail.com</p>
              <h4>Phone</h4>
              <p>0706783609</p>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card p-4">
            <div class="">
              <?php echo "<font color='green'><b>$text</b></font> ";
               ?>
            </div>
            <div class="card-body">
              <h3 class="text-center">We would love to hear from you <?php echo $_SESSION['username']; ?></h3>
              <hr>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="fname" requireds value="<?php echo $_SESSION['username'];?>">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required name="email">
                  </div>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message" name="message"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" class="btn btn-outline-danger btn-block" name="submit">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </form>
  </section>




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
</body>
</html>
