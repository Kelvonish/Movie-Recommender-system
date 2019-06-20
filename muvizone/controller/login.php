<?php
session_start();
include('connectdb.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    //Validation
    $q = "SELECT * FROM userdata WHERE Username = '$username' && Pass = '$password'";
    $sql="SELECT * FROM userdata WHERE Email='$username' OR Username= '$username'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    $genre = $row['genre'];
    $_SESSION['genre']=$genre;
    $age=$row['age'];
    $_SESSION['age']=$age;

    $res = $conn->query($q);
    $num = mysqli_num_rows($res);

    if ($num == 1) {

       $_SESSION['username'] = strtolower($username);

       if ($_SESSION['username']=="admin") {
            header('location: ../admin/index.php');
            $_SESSION['status'] = 'admin';
       } else {


            $sql="SELECT * FROM userdata WHERE Email='$username' OR Username= '$username'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
            $genre = $row['genre'];
            $_SESSION['genre']=$genre;
            header('location: ../user/index.php');
            $_SESSION['status'] = 'user';

       }
    } else {
        header('location: ../guest/index.php#error1');
    }
    $conn->close();
?>
