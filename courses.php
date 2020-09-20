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
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  <?php include 'menu_bar.php'; ?>
</head>

<body>
  <!-- Start your project here-->






  <!-- Carousel Wrapper -->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">

      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>

      <li data-target="#carousel-example-1z" data-slide-to="1"></li>

      <li data-target="#carousel-example-1z" data-slide-to="2"></li>

    </ol>

    <!-- Indicators -->

    <!-- Slides -->
    <div class="carousel-inner" role="listbox">

      <!-- First slide -->
      <div class="carousel-item active">

        <div class="view h-100">

          <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce4.jpg" alt="First slide">

          <div class="mask">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">

              <ul class="animated fadeIn col-10 list-unstyled">

                <li>

                  <p class="h1 red-text mb-4 mt-5">

                    <strong>Sale off 30% on every saturday!</strong>

                  </p>

                </li>

                <li>

                  <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5">Tempora incidunt ut labore et dolore

                    veritatis et quasi architecto beatae</h5>

                </li>

                <li>

                  <a target="_blank" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" class="btn btn-danger btn-rounded" rel="nofollow">See more!</a>

                </li>

              </ul>

            </div>
            <!-- Caption -->

          </div>

        </div>

      </div>
      <!-- First slide -->

      <!-- Second slide -->
      <div class="carousel-item h-100">

        <div class="view h-100">

          <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce2.jpg" alt="Second slide">

          <div class="mask">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">

              <ul class="animated fadeIn col-10 list-unstyled">

                <li>

                  <p class="h1 dark-grey-text mb-4">

                    <strong>Nemo enim ipsam voluptatem quia voluptas sit</strong>

                  </p>

                </li>

                <li>

                  <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5">Tempora incidunt ut labore et dolore

                    veritatis et quasi architecto beatae</h5>

                </li>

                <li>

                  <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-primary btn-rounded" rel="nofollow">Read more</a>

                </li>

              </ul>

            </div>
            <!-- Caption -->

          </div>

        </div>

      </div>
      <!-- Second slide -->

      <!-- Third slide -->
      <div class="carousel-item">

        <div class="view h-100">

          <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce3.jpg" alt="Third slide">

          <div class="mask">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">

              <ul class="animated fadeIn col-md-10 text-center text-md-right list-unstyled">

                <li>

                  <p class="h1 blue-text mb-4 mt-5 pr-lg-5">

                    <strong>Sale off 20% on every headphones!</strong>

                  </p>

                </li>

                <li>

                  <h5 class="h5-responsive dark-grey-text font-weight-bold mb-5 pr-lg-5">Tempora incidunt ut labore et

                    dolore veritatis et quasi</h5>

                </li>

              </ul>

            </div>
            <!-- Caption -->

          </div>

        </div>

      </div>
      <!-- Third slide -->

    </div>
    <!-- Slides -->

    <!-- Controls -->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">

      <span class="carousel-control-prev-icon" aria-hidden="true"></span>

      <span class="sr-only">Previous</span>

    </a>

    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">

      <span class="carousel-control-next-icon" aria-hidden="true"></span>

      <span class="sr-only">Next</span>

    </a>
    <!-- Controls -->

  </div>
  <!-- Carousel Wrapper -->


  <!-- Main Container -->
  <div class="container">

    <div class="row pt-4">

      <!-- Content -->
      <div class="col-lg-12">

        <!-- Products Grid -->
        <section class="section pt-4">

          <!-- Grid row -->
<?php
            include "config.php";
            $sql = "SELECT * FROM courses;";
            $result = mysqli_query($conn, $sql) or die("Query Failed.");
            $x=1;
            while ($row = mysqli_fetch_assoc($result)) {
              
              
              if($x%3==1){echo '<div class="row">';};

?>

          

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-4">

              <!-- Card -->
              <div class="card card-ecommerce">

                <!-- Card image -->
                <div class="view overlay">

                  <img src="admin/img/cours/<?php echo $row['cours_img']?>" class="img-fluid" alt="">

                  <a href="cours_details.php?id=<?php echo $row['cours_id']?>">

                    <div class="mask rgba-white-slight"></div>

                  </a>

                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body">

                  <!-- Category & Title -->
                  <h5 class="card-title mb-1">

                    <strong>

                      <a href="cours_details.php?id=<?php echo $row['cours_id']?>" class="dark-grey-text"><?php echo $row['cours_name']?></a>

                    </strong>

                  </h5>
                <?php
                  $sql="SELECT * FROM categories_cours;";
                  $result1 = mysqli_query($conn, $sql) or die("Query Failed.");$tag_1;$tag_2;$tsg_3;
                  while ($row1 = mysqli_fetch_assoc($result1)) {
                    if($row['tag_1']==$row1['categories'])$tag_1=$row1['color'];
                    if($row['tag_2']==$row1['categories'])$tag_2=$row1['color'];
                    if($row['tag_3']==$row1['categories'])$tag_3=$row1['color'];
                  }
                  echo "<span class='badge badge-{$tag_1} mb-2'>{$row['tag_1']}</span>&nbsp;";
                  if($row['tag_2']!="null")
                  echo "<span class='badge badge-{$tag_2} mb-2'>{$row['tag_2']}</span>&nbsp;";
                  if($row['tag_3']!="null")
                  echo "<span class='badge badge-{$tag_3} mb-2'>{$row['tag_3']}</span>";
                ?>
                  <p><?php echo $row['short_desc']?></p>

                  <!-- Card footer -->
                  <div class="card-footer pb-0">

                    <div class="row mb-0">

                    <?php
                      $dis=(int)$row['cours_price']-(int)$row['cours_discount'];

                    if($row['cours_discount']=="null"){
                    echo "<span class='float-left'>

                        <strong>&#8377;{$row['cours_price']}</strong>

                      </span>";
                    }
                  else
                      echo "<h5 class='mb-0 pb-0 mt-1 font-weight-bold'>

                        <span class='red-text'>

                          <strong>&#8377;{$dis}</strong>

                        </span>

                        <span class='grey-text'>

                          <small>

                            <s>&#8377;{$row['cours_price']}</s>

                          </small>

                        </span>

                      </h5>";

?>

                      <span class="float-right">

                        <a class="" data-toggle="tooltip" data-placement="top" title="Buy">

                          <i class="fas fa-shopping-cart ml-3"></i>

                        </a>

                      </span>

                    </div>

                  </div>

                </div>

                <!-- Card content -->
              </div>

              <!-- Card -->
            </div>
            <!-- Grid column -->

<?php
        if($x%3==0) {echo "</div>";}
        $x++;
      }
      ?>


          

          <!-- Grid row -->

        </section>
        <!-- Products Grid -->

      </div>
      <!-- Content -->

    </div>

  </div>
  <!-- Main Container -->








  <!-- End your project here-->
  <!-- jQuery -->

</body>
<?php include "footer.php"; ?>

</html>