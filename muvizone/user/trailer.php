<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">
    <link rel=" stylesheet " href="../css/cinema.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>
  <body id="trailer">

    <?php include('menu.php');
    $link="";
if (isset($_POST['aquaman'])) {
  $link="https://www.youtube.com/embed/WDkg3h8PCVU";
}
elseif (isset($_POST['glass'])) {
  $link="https://www.youtube.com/embed/95ghQs5AmNk";
}
elseif (isset($_POST['upside'])) {
  $link="https://www.youtube.com/embed/Dt1EEV-Szu4";
}
elseif (isset($_POST['uri'])) {
  $link="https://www.youtube.com/embed/Cg8sbRFS3zU";
}

    ?>

<div class="video">
<iframe id="iframe" width="660" height="415"
src=<?php echo$link;?>>
</iframe>


<div class="footer">
    <p>&copy; Copyright MUVIzone 2019.</p>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  </body>
</html>
