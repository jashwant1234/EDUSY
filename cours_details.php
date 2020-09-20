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
  <?php
  include "config.php";
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM courses WHERE cours_id='{$id}';";
  $result = mysqli_query($conn, $sql) or die("Query Failed.");
  $x = 1;
  while ($row = mysqli_fetch_assoc($result)) {
  ?>


    <div class="container mt-5 pt-3">

      <!-- Section: Product detail -->
      <section id="productDetails" class="pb-5">

        <!-- News card -->
        <div class="card mt-5 hoverable">

          <div class="row mt-5">

            <div class="col-lg-6">

              <!-- Carousel Wrapper -->
              <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

                <!-- Slides -->
                <div class="carousel-inner text-center text-md-left" role="listbox">

                  <div class="carousel-item active">

                    <img src="admin/img/cours/<?php echo $row['cours_img'] ?>" alt="First slide" class="img-fluid">

                  </div>

                </div>
                <!-- Slides -->


              </div>
              <!-- Carousel Wrapper -->

            </div>

            <div class="col-lg-5 mr-3 text-center text-md-left">

              <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">

                <strong><?php echo $row['cours_name'] ?></strong>

              </h2>

              <?php
              $sql = "SELECT * FROM categories_cours;";
              $result1 = mysqli_query($conn, $sql) or die("Query Failed.");
              $tag_1;
              $tag_2;
              $tsg_3;
              while ($row1 = mysqli_fetch_assoc($result1)) {
                if ($row['tag_1'] == $row1['categories']) $tag_1 = $row1['color'];
                if ($row['tag_2'] == $row1['categories']) $tag_2 = $row1['color'];
                if ($row['tag_3'] == $row1['categories']) $tag_3 = $row1['color'];
              }
              echo "<span class='badge badge-{$tag_1} mb-2'>{$row['tag_1']}</span>&nbsp;";
              if ($row['tag_2'] != "null")
                echo "<span class='badge badge-{$tag_2} mb-2'>{$row['tag_2']}</span>&nbsp;";
              if ($row['tag_3'] != "null")
                echo "<span class='badge badge-{$tag_3} mb-2'>{$row['tag_3']}</span>";
              ?>

              <?php

              $dis = (int)$row['cours_price'] - (int)$row['cours_discount'];

              if ($row['cours_discount'] == "null") {
                echo " <h3 class='h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4'>
<span class='float-left'>

    <strong>&#8377;{$row['cours_price']}</strong>

  </span>
  </h3>";
              } else
                echo "   <h3 class='h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4'>

    <span class='red-text font-weight-bold'>

      <strong>&#8377;{$dis}</strong>

    </span>

    <span class='grey-text'>

      <small>

        <s>&#8377;{$row['cours_price']}</s>

      </small>

    </span>

  </h3>";

              ?>

              <!-- Accordion wrapper -->
              <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingOne1">

                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">

                      <h5 class="mb-0">

                        Description

                        <i class="fas fa-angle-down rotate-icon"></i>

                      </h5>

                    </a>

                  </div>

                  <!-- Card body -->
                  <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">

                    <div class="card-body">

                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                      wolf moon officia aute,

                      non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                      moon

                      tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

                    </div>

                  </div>

                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingTwo2">

                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">

                      <h5 class="mb-0">

                        Details

                        <i class="fas fa-angle-down rotate-icon"></i>

                      </h5>

                    </a>

                  </div>

                  <!-- Card body -->
                  <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">

                    <div class="card-body">

                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                      wolf moon officia aute,

                      non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                      moon

                      tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

                    </div>

                  </div>

                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingThree3">

                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">

                      <h5 class="mb-0">

                        Shipping

                        <i class="fas fa-angle-down rotate-icon"></i>

                      </h5>

                    </a>

                  </div>

                  <!-- Card body -->
                  <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">

                    <div class="card-body">

                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                      wolf moon officia aute,

                      non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                      moon

                      tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.

                    </div>

                  </div>

                </div>
                <!-- Accordion card -->

              </div>
              <!-- Accordion wrapper -->
            <?php } ?>


            <!-- Add to Cart -->
            <section class="color">

              <div class="mt-5">


                <div class="row mt-3 mb-4">

                  <div class="col-md-12 text-center text-md-left text-md-right">

                    <button class="btn btn-primary btn-rounded">

                      Join Now</button>

                  </div>

                </div>

              </div>

            </section>
            <!-- Add to Cart -->


            </div>

          </div>

        </div>

      </section>

      <div class="divider-new">

        <h3 class="h3-responsive font-weight-bold blue-text mx-3">Related Products</h3>

      </div>

      <!-- Section: Products v.5 -->
      <section id="products" class="pb-5">

        <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi,

          veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <!-- Carousel Wrapper -->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

          <!-- Controls -->
          <div class="controls-top">

            <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">

              <i class="fas fa-chevron-left"></i>

            </a>

            <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">

              <i class="fas fa-chevron-right"></i>

            </a>

          </div>
          <!-- Controls -->

          <!-- Indicators -->
          <ol class="carousel-indicators">

            <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>

            <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>

            <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>

          </ol>
          <!-- Indicators -->

          <!-- Slides -->
          <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active">

              <div class="col-md-4 mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                  <!-- Card image -->
                  <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" class="img-fluid" alt="">

                    <a>

                      <div class="mask rgba-white-slight"></div>

                    </a>

                  </div>
                  <!-- Card image -->

                  <!-- Card content -->
                  <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                      <strong>

                        <a href="" class="dark-grey-text">Sony TV-675i</a>

                      </strong>

                    </h5>

                    <span class="badge badge-danger mb-2">bestseller</span>

                    <!-- Rating -->
                    <ul class="rating">

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star grey-text"></i>

                      </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                      <div class="row mb-0">

                        <span class="float-left">

                          <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                          <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

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

              <div class="col-md-4 clearfix d-none d-md-block mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                  <!-- Card image -->
                  <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">

                    <a>

                      <div class="mask rgba-white-slight"></div>

                    </a>

                  </div>
                  <!-- Card image -->

                  <!-- Card content -->
                  <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                      <strong>

                        <a href="" class="dark-grey-text">Samsung 786i</a>

                      </strong>

                    </h5>

                    <span class="badge badge-info mb-2">new</span>

                    <!-- Rating -->
                    <ul class="rating">

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star grey-text"></i>

                      </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                      <div class="row mb-0">

                        <span class="float-left">

                          <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                          <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

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

              <div class="col-md-4 clearfix d-none d-md-block mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                  <!-- Card image -->
                  <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid" alt="">

                    <a>

                      <div class="mask rgba-white-slight"></div>

                    </a>

                  </div>
                  <!-- Card image -->

                  <!-- Card content -->
                  <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                      <strong>

                        <a href="" class="dark-grey-text">Canon 675-D</a>

                      </strong>

                    </h5>

                    <span class="badge badge-danger mb-2">bestseller</span>

                    <!-- Rating -->
                    <ul class="rating">

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                      <div class="row mb-0">

                        <span class="float-left">

                          <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                          <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

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

            </div>
            <!-- First slide -->

            <!-- Second slide -->
            <div class="carousel-item">

              <div class="col-md-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                  <!-- Card image -->
                  <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid" alt="">

                    <a>

                      <div class="mask rgba-white-slight"></div>

                    </a>

                  </div>
                  <!-- Card image -->

                  <!-- Card content -->
                  <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                      <strong>

                        <a href="" class="dark-grey-text">Samsung V54</a>

                      </strong>

                    </h5>

                    <span class="badge grey mb-2">best rated</span>

                    <!-- Rating -->
                    <ul class="rating">

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                      <div class="row mb-0">

                        <span class="float-left">

                          <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                          <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

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

              <div class="col-md-4 clearfix d-none d-md-block mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                  <!-- Card image -->
                  <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" class="img-fluid" alt="">

                    <a>

                      <div class="mask rgba-white-slight"></div>

                    </a>

                  </div>
                  <!-- Card image -->

                  <!-- Card content -->
                  <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                      <strong>

                        <a href="" class="dark-grey-text">Dell V-964i</a>

                      </strong>

                    </h5>

                    <span class="badge badge-info mb-2">new</span>

                    <!-- Rating -->
                    <ul class="rating">

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                      <div class="row mb-0">

                        <span class="float-left">

                          <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                          <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

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

              <div class="col-md-4 clearfix d-none d-md-block mb-4">

                <!-- Card -->
                <div class="card card-ecommerce">

                  <!-- Card image -->
                  <div class="view overlay">

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" class="img-fluid" alt="">

                    <a>

                      <div class="mask rgba-white-slight"></div>

                    </a>

                  </div>
                  <!-- Card image -->

                  <!-- Card content -->
                  <div class="card-body">

                    <!-- Category & Title -->
                    <h5 class="card-title mb-1">

                      <strong>

                        <a href="" class="dark-grey-text">iPad PRO</a>

                      </strong>

                    </h5>

                    <span class="badge badge-danger mb-2">bestseller</span>

                    <!-- Rating -->
                    <ul class="rating">

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star blue-text"></i>

                      </li>

                      <li>

                        <i class="fas fa-star grey-text"></i>

                      </li>

                    </ul>

                    <!-- Card footer -->
                    <div class="card-footer pb-0">

                      <div class="row mb-0">

                        <span class="float-left">

                          <strong>1439$</strong>

                        </span>

                        <span class="float-right">

                          <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">

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

            </div>
            <!-- Second slide -->

          </div>
          <!-- Slides -->

        </div>
        <!-- Carousel Wrapper -->

      </section>
      <!-- Section: Products v.5 -->

    </div>



    <!-- End your project here-->
    <!-- jQuery -->
    <script type="text/javascript">
      /* WOW.js init */
      new WOW().init();
      // SideNav Button Initialization

      $(".button-collapse").sideNav();
      // SideNav Scrollbar Initialization

      var sideNavScrollbar = document.querySelector('.custom-scrollbar');
      Ps.initialize(sideNavScrollbar);
      // Tooltips Initialization
      $(function() {

        $('[data-toggle="tooltip"]').tooltip()
      });
      // Material Select Initialization
      $(document).ready(function() {

        $('.mdb-select').material_select();
      });
    </script>

</body>
<?php include "footer.php"; ?>

</html>