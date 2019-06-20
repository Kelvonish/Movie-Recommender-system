<?php

   session_start();

   include('connectdb.php');

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];
    $genre = $_POST['genre'];
    $age = $_POST['age'];
    //Validation
    $q = "SELECT * FROM userdata WHERE Username = '$username' OR Email = '$email'";

    $res = $conn->query($q);
    $num = mysqli_num_rows($res);

    if ($num >= 1) {
        if ($_SESSION['username']=="admin") {
            header('location: ../users/index.php#error');
        } else {
            header('location: ../guest/index.php#error');
        }
    } else {
        $sql = "INSERT INTO userdata (Username,Pass,Fullname,Email,genre,age,status) values('$username','$password','$fullname','$email','$genre','$age','user')";


         $message="Hello $fullname <br> Welcome to muvizone. It is site where you can view information about your favourite movie. ";
        $to = $email;
         //put email address on which mail
         $subject     =   "Welcome to MUVIzone";  //Put subject of mail here
         $from        =   $email;
         //put email address from

        //email body start


        $header = "From: noreply@example.com\r\n";
        $header.= "MIME-Version: 1.0\r\n";
        $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $header.= "X-Priority: 1\r\n";

        $status = mail($to, $subject, $message, $header);

        if($status)
        {

        } else {

        }


        $result = $conn -> query($sql);

        if ($_SESSION['username']=="admin") {
            header('location: ../admin/users.php#success');
        } else {
            header('location: ../guest/index.php#success');
        }
    }
    $conn->close();
?>
