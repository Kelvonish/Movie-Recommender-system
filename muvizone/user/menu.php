<!DOCTYPE html>
<html>
<head>
<title>Muvizone</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">

 <style>
body {

font-family: 'Merienda One', cursive;

}
#name{
color: red;
font-weight:600;

}

</style>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark navbar-fixed-top"  >
  	<div class="container">
  	<a class="navbar-brand" href="index.php" id="name">Muvizone</a>
  	<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span> </button>
  	<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav  ml-auto">


	<li class="nav-item ">
			<a class="nav-link active " href="index.php ">Home</a>
	</li>
	<li class="nav-item ">
			<a class="nav-link " href="browse.php">Search Movies</a>
	</li>
	<li class="nav-item ">
			<a class="nav-link" href="cinema.php">Cinema</a>
	</li>
	<li class="nav-item ">
			<a class="nav-link" href="contact.php">Contact Us</a>
	</li>

	<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
					<img src="../image/default-user.png" style="width:30px; border-radius:50%;" alt="logo ">
			</a>
			<div class="dropdown-menu">
					<a class="dropdown-item" style="color:black; text-transform:lowercase;" href="#"><?php echo $_SESSION['username']; ?></a>
						<a class="dropdown-item btn btn-outline-success" href="profile.php">Profile</a>
					<a class="dropdown-item btn btn-danger" href="../controller/logout.php">Log Out</a>
			</div>
	</li>

</ul>
</div>
</div>
</nav>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
