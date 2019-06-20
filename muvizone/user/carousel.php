<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title></title>
  </head>
  <style media="screen">
  @media only screen and (max-width: 600px) {
    .slider4 {
    height: 40vh;
    }
  }
  </style>
  <body>
    <div id="slider4" class="carousel slide mb-5" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#slider4" data-slide-to="0"></li>
                <li data-target="#slider4" data-slide-to="1"></li>
                <li data-target="#slider4" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="../image/aquaman.png" alt="First Slide">
                  <div class="carousel-caption d-none d-md-block">
                   <a href="cinema.php"> <input type="submit" name="" value="Now showing" class="btn btn-danger mb-5"></a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="../image/avenger.png" alt="Second Slide">
                  <div class="carousel-caption d-none d-md-block">

                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="../image/alita.png" alt="Third Slide">
                  <div class="carousel-caption d-none d-md-block">

                  </div>
                </div>
              </div>
              <a href="#slider4" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>

              <a href="#slider4" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>



      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      <script>
        $('.carousel').carousel({
          interval:5000,
          keyboard: true,
          pause:'hover',
          wrap:true
        });

        $('#slider4').on('slide.bs.carousel', function(){
          console.log('slide');
        });
        $('#slider4').on('slid.bs.carousel', function(){
          console.log('slid');
        });
      </script>
  </body>
</html>
