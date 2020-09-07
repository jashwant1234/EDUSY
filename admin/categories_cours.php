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
    <?php include '../menu_bar.php'; ?>
</head>
<?php
include "../config.php";
if(isset($_POST['save'])){
    $cat=mysqli_real_escape_string($conn,$_POST['cat']);
    $color=mysqli_real_escape_string($conn,$_POST['color']);
    $sql = "INSERT INTO categories_cours (categories,color) VALUES ('{$cat}','{$color}');";
    mysqli_query($conn, $sql);
    header("Location: {$url}/admin/show_all_categories.php");
}
?>

<body>
    <!-- Material form register -->
    <div class="container jumbotrun">

        <!-- Material form subscription -->
        <div class="card">
            <!--Card content-->
            <div class="card-body px-lg-9">
                <div class="row">
                    <!-- Form -->
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form class="text-center" style="color: #757575;" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                            <p>
                                <a href="" target="_blank">Add The Categories that use in cours</a>
                            </p>

                            <div class="md-form mt-3">
                                <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="cat" required>
                                <label for="materialSubscriptionFormPasswords">name of the categorie and plese try to write in one to tow word</label>
                            </div>
                            <hr>
                            <select class="browser-default custom-select" name="color" required>
                                <option selected disabled>select the color for the tag</option>
                                <option value='danger'>red</option>
                                <option value='warning'>yellow</option>
                                <option value='success'>grean</option>
                                <option value='info'>blue</option>
                                <option value='secondary'>purple</option>
                            </select>
                            <!-- Sign in button -->
                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="save">Add The categorie</button>

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