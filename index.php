<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="animate.min.css">

  <style>
    .carousel-item {
      height: 100vh;
    }

    .img-box {
      width: 550px;
      position: relative;
    }

    .pic-one {
      width: 100%;
    }
    .pic-two {
      width: 100px;
      position: absolute;
      left:15px;
      bottom: 20px;
    }
    .pic-three {
      width: 75px;
      position: absolute;
      left:150px;
      bottom: 70px;
    }
    .pic-four {
      width: 160px;
      position: absolute;
      right: 40px;
      top: 110px;
    }
    .pic-five {
      width: 110px;
      position: absolute;
      right: 20px;
      bottom: 0;
    }
    .pic-six {
      width: 160px;
      position: absolute;
      right: 10px;
      bottom: 35px;
    }
    .slide-one {
      background-color: #b0c6f5;
    }

    .carousel-item .row {
      margin: 12% 0;
    }

    .carousel-item h1 {
      margin-top: 40px;
      font-weight: bold;
      color: #fff;
    }

    .carousel-item p {
      margin: 30px 0 50px;
      font-size: 13px;
      color: #fff;
    }

    .carousel-item button {
      padding: 8px 20px;
    }
    .slide-tow{
      background: #f7f7f7;
    }  
    .slide-tow h1,.slide-tow p{
      color: #feb154;
    }
    .img-one{
      width: 100%;
    }
    .img-two{
      width: 200px;
      position: absolute;
      left: 0;
      bottom: 20px;
    }
    .img-three{
      width: 70px;
      position: absolute;
      left: 245px;
      bottom: 55px;
    }
    .img-four {
      width: 60px;
      position: absolute;
      right: 155px;
      bottom: 95px;
    }
    .img-five {
      width: 100px;
      position: absolute;
      right: 50px;
      bottom: 20px;
    }
    </style>
  <?php include 'menu_bar.php'; ?>
</head>

<body>
  <!-- Start your project here-->
  <!--carousel-->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-color: #b0c6f5;">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="animated fadeInLeft delay-1s">Edusy</h1>
              <p class="animated lightSpeedIn delay-2s">E-learning refers to the use of electronic media and information and communication technologies (ICT) in education. E-Learning is the use of technology to enable people to learn anytime and anywhere. E-Learning can include training, the delivery of just-in-time information and guidance from experts.</p>
              <button type="button" class="btn blue-gradient btn-rounded animated jackInTheBox delay-3s">Read more</button>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="img/images/pic-1.png" alt="" class="pic-one animated zoomIn delay-1s">
                <img src="img/images/pic-2.png" alt="" class="pic-two animated fadeInLeft delay-4s">
                <img src="img/images/pic-3.png" alt="" class="pic-three animated fadeInUp delay-3s">
                <img src="img/images/pic-4.png" alt="" class="pic-four animated fadeInDown delay-3s">
                <img src="img/images/pic-5.png" alt="" class="pic-five animated fadeInRight delay-4s">
                <img src="img/images/pic-6.png" alt="" class="pic-six animated jackInTheBox delay-5s">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item slide-tow">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1  class="animated fadeInLeft delay-1s">Edusy</h1>
              <p class="animated lightSpeedIn delay-2s">E-learning refers to the use of electronic media and information and communication technologies (ICT) in education. E-Learning is the use of technology to enable people to learn anytime and anywhere. E-Learning can include training, the delivery of just-in-time information and guidance from experts.</p>
              <button type="button" class="btn peach-gradient animated jackInTheBox delay-3s">Read more</button>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="img/images/img-1.png" alt="" class="img-one animated zoomIn delay-1s">
                <img src="img/images/img-2.png" alt="" class="img-two animated fadeInLeft delay-4s">
                <img src="img/images/img-3.png" alt="" class="img-three animated zoomIn delay-3s">
                <img src="img/images/img-4.png" alt="" class="img-four animated fadeInDown delay-4s">
                <img src="img/images/img-5.png" alt="" class="img-five animated fadeInRight delay-2s">
              </div >
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--End carousel-->
  <!-- End your project here-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
</body>
<?php include "footer.php"; ?>

</ht