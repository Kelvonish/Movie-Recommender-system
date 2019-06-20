
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

include('../controller/connectdb.php');

$id=$_REQUEST['id'];
$query = "SELECT * from cinema where id='$id'";
$r = $conn -> query($query);
$row = $r->fetch_assoc();

if (isset($_POST['update'])) {
    $fullname=$_POST['fname'];
    $email = $_POST['email'];
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    //Validation
    $q = "SELECT * FROM userdata WHERE Username = '$username' OR Email = '$email'";

    $res = $conn->query($q);
    $num = mysqli_num_rows($res);

    if ($num > 1) {
            echo "error";
            header('location: users.php#error');
    } else {
        //$sql = "INSERT INTO userdata (Username,Pass,Fullname,Email) values('$username','$password','$fullname','$email')";

        $sql = "UPDATE cinema SET name='$fullname',price='$username',day = '$password', time='$email' WHERE UserId='$id'";

        $result = $conn -> query($sql);

            header('location: movie.php#updatesuccess');
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update movie</title>
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/popup.css">
    <link rel="stylesheet" href="../css/request.css">

</head>
<body>
    <?php  include("menu.php")?></a>
    <header>
        <div class="container req-box" >
        <center><h3 style="margin-bottom:50px;"><span style="font-weight:bold; color: #6AC045">Update Movie</span></h3></center>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6 box1">

                        <label for="title">Movie name:</label><br>
                        <input type="text" name="fname" class="input" value="<?php echo $row['name'];?>" required  ><br>
                        <label for="title">Time showing:</label><br>
                        <input type="text" name="email" class="input" value="<?php echo $row['time'];?>" required><br>

                    </div>
                    <div class="col-md-6 box1">
                        <label for="title">Price:</label><br>
                        <input type="text" name="username" class="input" value="<?php echo $row['price'];?>" required><br>
                        <label for="title">Day showing:</label><br>
                        <input type="text" name="password" class="input" value="<?php echo $row['day'];?>" required><br>
                        <input type="submit"  class="btn" name="update" value="Update User Data">
                    </div>
                </div>
            </form>
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
