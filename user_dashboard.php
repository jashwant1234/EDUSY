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
    <?php
    include "config.php";
    if (!isset($_SESSION["first_name"])) {
        header("Location: {$url}/index.php");
    }
    ?>
</head>

<body>
    <!-- Start your project here-->
    <div class="container">

        <div class="row pt-4">

            <!-- Content -->
            <div class="col-lg-12">

                <!-- Products Grid -->
                <section class="section pt-4">

                    <!-- Grid row -->
                    <?php
                    include "config.php";
                    $sql = "SELECT c.cours_id,c.cours_name,c.cours_img,c.tag_1,c.tag_2,c.tag_3,c.short_desc,e.status FROM cours_enrollment e,courses c where e.user_name='{$_SESSION['user_name']}' and c.cours_id=e.cours_id;";
                    $result = mysqli_query($conn, $sql) or die("Query Failed.");
                    $x = 1;
                    while ($row = mysqli_fetch_assoc($result)) {


                        if ($x % 3 == 1) {
                            echo '<div class="row">';
                        };

                    ?>



                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!-- Card -->
                            <div class="card card-ecommerce">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="admin/img/cours/<?php echo $row['cours_img']; ?>" class="img-fluid" alt="<?php echo $row['cours_img']; ?>">
                                    <?php if ($row['status'] != 'pending')
                                        echo "<a href='enrol_cours.php?id={$row['cours_id']}'>";
                                    ?>


                                    <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>
                                <!-- Card image -->

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Category & Title -->
                                    <h5 class="card-title mb-1">

                                        <strong>

                                            <a class="dark-grey-text"><?php echo $row['cours_name'] ?></a>

                                        </strong>

                                    </h5>
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
                                    <p><?php echo $row['short_desc'] ?></p>

                                    <!-- Card footer -->
                                    <div class="card-footer pb-0">

                                        <div class="row mb-0">


                                            <strong>

                                                <a class="dark-grey-text">payment is <?php echo $row['status'] ?></a>

                                            </strong>

                                        </div>

                                    </div>

                                </div>

                                <!-- Card content -->
                            </div>

                            <!-- Card -->
                        </div>
                        <!-- Grid column -->

                    <?php
                        if ($x % 3 == 0) {
                            echo "</div>";
                        }
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