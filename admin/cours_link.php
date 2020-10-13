<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <!-- MDB icon -->
    <link rel="icon" href="../img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <?php include '../menu_bar.php';
    include '../config.php';
    $cours_id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM courses where cours_id='{$cours_id}'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $cours_name = $row['cours_name'];
    };
    if (isset($_POST['save'])) {
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $dsc = mysqli_real_escape_string($conn, $_POST['dsc']);
        $link = mysqli_real_escape_string($conn, $_POST['link']);
        $duration = mysqli_real_escape_string($conn, $_POST['duration']);
        $type = mysqli_real_escape_string($conn, $_POST['type']);
        $sql = "INSERT INTO `cours_schedule` (`cours_id`, `cours__name`, `date`, `dsc`, `link`, `type`, `time`) VALUES ('{$cours_id}','{$cours_name}','{$date}','{$dsc}','{$link}','{$type}','{$duration}');";
        $result = mysqli_query($conn, $sql);
        header("Location: {$url}/admin/all_courses.php");
    }
    ?>
</head>

<body>
    <!-- Material form register -->
    <div class="container jumbotrun">
        <!-- Material form subscription -->
        <div class="card">
            <!-- Card content -->
            <div class="card-body px-lg-9">
                <div class="row">
                    <!-- Form -->
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form class="text-center" style="color: #757575;" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                            <p>
                                <a>class schedule for<?php echo $cours_name; ?></a>
                            </p>
                            <hr>
                            <br>
                            <br>
                            <!-- Name -->
                            <div class="md-form mt-3">
                                <input type="date" id="materialSubscriptionFormPasswords" class="form-control" name="date" required>
                                <label for="materialSubscriptionFormPasswords">date for the class</label>
                            </div>

                            <hr>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">topic</label>
                                <textarea class="form-control" id="exampleFormControlTextarea3" rows="5" name="dsc" required></textarea>
                            </div>
                            <hr>
                            <!-- E-mai -->
                            <div class="md-form mt-3">
                                <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="link" required>
                                <label for="materialSubscriptionFormPasswords">past the link</label>
                            </div>
                            <div class="md-form mt-3">
                                <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="duration" required>
                                <label for="materialSubscriptionFormPasswords">timeing for the class</label>
                            </div>
                            <!-- Group of default radios - option 1 -->
                            <div style="text-align: left;">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="type" value="video">
                                    <label class="custom-control-label" for="defaultGroupExample1">youtube link</label>
                                </div>

                                <!-- Group of default radios - option 2 -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="type" value="class" checked>
                                    <label class="custom-control-label" for="defaultGroupExample2">class link</label>
                                </div>
                            </div>
                            <!-- Sign in button -->
                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="save">Add The cours</button>
                        </form>
                        <!-- Form -->
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>

        </div>
        <!-- Material form subscription -->
    </div>
</body>
<?php include "../footer.php"; ?>

</html>