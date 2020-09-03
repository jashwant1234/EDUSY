<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
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
      left: 15px;
      bottom: 20px;
    }

    .pic-three {
      width: 75px;
      position: absolute;
      left: 150px;
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

    .slide-tow {
      background: #f7f7f7;
    }

    .slide-tow h1,
    .slide-tow p {
      color: #feb154;
    }

    .img-one {
      width: 100%;
    }

    .img-two {
      width: 200px;
      position: absolute;
      left: 0;
      bottom: 20px;
    }

    .img-three {
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
              <h1 class="animated fadeInLeft delay-1s">Edusy</h1>
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
              </div>
            </div>
          </div>
        </div>
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






`<div class="container jumbotrun">

  <hr>

<!--Projects section v.3-->
<section id="info" class="mt-4 mb-5 pb-4">

  <!--Section heading-->
  <h2 class="text-center mb-5 font-weight-bold pt-5 pb-4 my-5 wow fadeIn" data-wow-delay="0.2s">Organizational
    issues</h2>
  <!--Section description-->
  <p class="text-center w-responsive mx-auto my-5 grey-text wow fadeIn" data-wow-delay="0.2s">Duis aute irure
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  <!--First row-->
  <div class="row wow fadeIn" data-wow-delay="0.4s">

    <!--First column-->
    <div class="col-md-12">

      <div class="mb-2">

        <!--Nav tabs-->
        <ul class="nav md-pills pills-primary d-flex justify-content-center" role="tablist">

          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel31" role="tab">
              <i class="fas fa-graduation-cap fa-2x"></i>
              <br> Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel32" role="tab">
              <i class="fas fa-users fa-2x"></i>
              <br> Candidates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel33" role="tab">
              <i class="fas fa-university fa-2x"></i>
              <br> Financial</a>
          </li>
        </ul>

      </div>

      <!--Tab panels-->
      <div class="tab-content">

        <!--Panel 1-->
        <div class="tab-pane fade in show active" id="panel31" role="tabpanel">
          <br>

          <!--First row-->
          <div class="row">

            <!--First column-->
            <div class="col-lg-5 col-md-12">

              <!--Featured image-->
              <div class="view overlay z-depth-1 mb-2">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/54.jpg" class="rounded img-fluid"
                  alt="sample image">
              </div>
            </div>
            <!--First column-->

            <!--Second column-->
            <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

              <!--Title-->
              <h4 class="mb-5">Academics Students</h4>

              <!--Description-->
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                ratione
                quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                possimus in hic molestias repellendus illo ullam odit quia velit.</p>

            </div>
            <!--Second column-->
          </div>
          <!--First row-->

        </div>
        <!--Panel 1-->

        <!--Panel 2-->
        <div class="tab-pane fade" id="panel32" role="tabpanel">
          <br>

          <!--First row-->
          <div class="row">

            <!--First column-->
            <div class="col-lg-5 col-md-12">

              <!--Featured image-->
              <div class="view overlay z-depth-1 mb-2">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2840%29.jpg"
                  class="rounded img-fluid" alt="sample image">
              </div>
            </div>
            <!--First column-->

            <!--Second column-->
            <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

              <!--Title-->
              <h4 class="mb-5">Information for Candidates</h4>

              <!--Description-->
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                ratione
                quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                possimus in hic molestias repellendus illo ullam odit quia velit.</p>

            </div>
            <!--Second column-->
          </div>
          <!--First row-->

        </div>
        <!--Panel 2-->

        <!--Panel 3-->
        <div class="tab-pane fade" id="panel33" role="tabpanel">
          <br>

          <!--First row-->
          <div class="row">

            <!--First column-->
            <div class="col-lg-5 col-md-12">

              <!--Featured image-->
              <div class="view overlay z-depth-1 mb-2">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2841%29.jpg"
                  class="rounded img-fluid" alt="sample image">
              </div>
            </div>
            <!--First column-->

            <!--Second column-->
            <div class="col-lg-6 ml-lg-auto col-md-12 text-center text-md-left">

              <!--Title-->
              <h4 class="mb-5">Financial Aid</h4>

              <!--Description-->
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                ratione
                quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                eaque delectus, beatae maxime temporibus maiores quibusdam quasi.Rem magnam ad
                perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut
                possimus in hic molestias repellendus illo ullam odit quia velit.</p>

            </div>
            <!--Second column-->
          </div>
          <!--First row-->

        </div>
        <!--Panel 3-->

      </div>
      <!--Tab panels-->

    </div>
    <!--First column-->

  </div>
  <!--First row-->

</section>
<!--Projects section v.3-->

</div>







  <!--Streak-->
  <div class="streak streak-photo streak-long-2" style="background-image: url('https://mdbootstrap.com/img/Others/doctor.jpg');">
      <div class="flex-center mask rgba-blue-strong">
        <div class="container text-center white-text">
          <h3 class="text-center text-white text-uppercase font-weight-bold mt-5 mb-5 pt-3 wow fadeIn" data-wow-delay="0.2s">Great
            people trusted our services</h3>

          <!--First row-->
          <div class="row text-white text-center wow fadeIn" data-wow-delay="0.2s">

            <!--First column-->
            <div class="col-md-3 mt-2">
              <h1 class="white-text font-weight-bold">+950</h1>
              <p>Lorem ipsum dolor</p>
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-md-3 mt-2">
              <h1 class="white-text font-weight-bold">+150</h1>
              <p>Lorem ipsum dolor</p>
            </div>
            <!--/Second column-->

            <!--Third column-->
            <div class="col-md-3 mt-2">
              <h1 class="white-text font-weight-bold">+85</h1>
              <p>Lorem ipsum dolor</p>
            </div>
            <!--/Third column-->

            <!--Fourth column-->
            <div class="col-md-3 mt-2 mb-5 pb-3">
              <h1 class="white-text font-weight-bold">+6K</h1>
              <p>Lorem ipsum dolor</p>
            </div>
            <!--/Fourth column-->

          </div>
          <!--/First row-->

        </div>
      </div>
    </div>
    <!--/Streak-->


  <!--Multi Item Carousel-->
  <div class="container-fluid background-r">
    <div class="container py-3">

      <!--Section: Blog v.2-->
      <section class="extra-margins text-center">

        <h2 class="text-center mb-5 my-5 pt-4 pb-4 font-weight-bold"> Top courses</h2>

        <!--Grid row-->
        <div class="row mb-5 pb-3">

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">
          <div class="card card-cascade narrower">

            <!-- Card image -->
            <div class="view view-cascade overlay">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" alt="Card image cap">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade">

              <!-- Label -->
              <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Culinary</h5>
              <!-- Title -->
              <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
              <!-- Text -->
              <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                laboriosam, nisi ut aliquid ex ea commodi.</p>
              <!-- Button -->
              <a class="btn btn-unique">Button</a>

            </div>

          </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

            <!--Card Light-->
            <div class="card">
              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/40.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--/.Card image-->
              <!--Card content-->
              <div class="card-body">

                <!--Title-->
                <h4 class="card-title darkgrey-text">
                  <strong>Chemistry</strong>
                </h4>
                <hr>
                <!--Text-->
                <p class="font-small">Some quick example text to build on the card title and make up the bulk of the
                  card's
                  content.
                </p>
                <a href="#" class="black-text d-flex flex-row-reverse">
                  <p class="waves-effect p-2 font-small blue-text mb-0">Read more
                    <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                  </p>
                </a>
              </div>
              <!--/.Card content-->
            </div>
            <!--/.Card Light-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

            <!--Card Light-->
            <div class="card">
              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/56.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--/.Card image-->

              <!--Card content-->
              <div class="card-body">

                <!--Title-->
                <h4 class="card-title darkgrey-text">
                  <strong>Journalism</strong>
                </h4>
                <hr>
                <!--Text-->
                <p class="font-small">Some quick example text to build on the card title and make up the bulk of the
                  card's
                  content.
                </p>
                <a href="#" class="black-text d-flex flex-row-reverse">
                  <p class="waves-effect p-2 font-small blue-text mb-0">Read more
                    <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                  </p>
                </a>
              </div>
              <!--/.Card content-->
            </div>
            <!--/.Card Light-->

          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

            <!--Card Light-->
            <div class="card">
              <!--Card image-->
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/57.jpg" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--/.Card image-->
              <!--Card content-->
              <div class="card-body">

                <!--Title-->
                <h4 class="card-title darkgrey-text">
                  <strong>Computer science</strong>
                </h4>
                <hr>
                <!--Text-->
                <p class="font-small">Some quick example text to build on the card title and make up the bulk of the
                  card's
                  content.
                </p>
                <a href="#" class="black-text d-flex flex-row-reverse">
                  <p class="waves-effect p-2 font-small blue-text mb-0">Read more
                    <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                  </p>
                </a>
              </div>
              <!--/.Card content-->
            </div>
            <!--/.Card Light-->

          </div>
          <!--Grid column-->

        </div>
        <!--First row-->

      </section>
      <!--Section: Blog v.2-->

    </div>
  </div>
  <!--End Multi Item Carousel-->
  <!--Streak-->
  <div class="streak streak-photo streak-md" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full%20page/img%20%287%29.jpg');">
    <div class="flex-center mask rgba-indigo-strong">
      <div class="text-center white-text">
        <h2 class="h2-responsive mb-5">
          <i class="fas fa-quote-left" aria-hidden="true"></i> Creativity requires the courage to let go of
          certainties
          <i class="fas fa-quote-right" aria-hidden="true"></i>
        </h2>
        <h5 class="text-center font-italic " data-wow-delay="0.2s">~ Erich Fromm</h5>
      </div>
    </div>
  </div>
  <!--Streak-->

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

</html>