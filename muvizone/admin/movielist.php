<?php
include('../controller/connectdb.php');
//Validation
$sql = "SELECT * FROM cinema";
$result = $conn->query($sql);
$list = '';
$list2='';
$total = $result->num_rows;

if($result->num_rows > 0) {
    // output data of each row
     while($row = $result->fetch_assoc()) {
        $list2 = $list2.'
        <div class="row box">
        <div class="col-md-2 box4">

        </div>
        <div class="col-md-6 box5">
            <p> <span style="color: #6AC045;">Name: </span> '.$row["name"].'<br>
             <span style="color: #6AC045;">Day showing: </span>'.$row["day"].'<br>
           <span style="color: #6AC045;">Time showing: </span>'.$row["time"].'<br>
           <p> <span style="color: #6AC045;">Price per ticket: </span> '.$row["price"].'
            </p>
        </div>
        <div class="col-md-4 box5">
            <a href="../controller/deletemovie.php?id='.$row["id"].'" class="btn btn-danger"> Delete</a>
            <a href="updatemovie.php?id='.$row["id"].'" class="btn"> Update</a>
        </div>
    </div>
        ';
    }

} else {
    $list2 = "No movies yet";
}

// $_SESSION['list']= $list;
// $_SESSION['total']= $total;


$conn->close();
?>
