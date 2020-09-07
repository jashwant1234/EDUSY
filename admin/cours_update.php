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
                        <form class="text-center" style="color: #757575;" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

                            <p>
                                <a href="" target="_blank">Add New Cours</a>
                            </p>

                            <!-- Name -->
                            <div class="md-form mt-3">
                                <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="name" required>
                                <label for="materialSubscriptionFormPasswords">Cousr Name</label>
                            </div>
                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left">
                                    <span>Choose file</span>
                                    <input type="file" name="upload_file" required>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Cours Image">
                                </div>
                            </div>
                            <hr>
                            <select class="browser-default custom-select" name="tag1">
                                <option selected disabled>Choose The Tag For Your Cours</option>
                            <?php    
                                    include "../config.php";
                                    $sql = "SELECT * FROM categories_cours ;";
                                    $result = mysqli_query($conn,$sql) or die("Query Failed.");
                                    while($row = mysqli_fetch_assoc($result)){
                                echo"                
                                <option value='{$row['categories']}'>{$row['categories']}</option>
                                                ";}
                                ?>
                            </select>
                            <hr>
                            <select class="browser-default custom-select" name="tag2">
                                <option selected value="null">Any more tag you want to give the cours and this is optional</option>
                                <?php
                                    $sql = "SELECT * FROM categories_cours ;";
                                    $result = mysqli_query($conn,$sql) or die("Query Failed.");
                                    while($row = mysqli_fetch_assoc($result)){
                                echo"                
                                <option value='{$row['categories']}'>{$row['categories']}</option>
                                                ";}
                                ?>
                            </select>
                            <hr>
                            <select class="browser-default custom-select" name="tag3">
                                <option selected value="null">this is optional</option>
                                <?php
                                    $sql = "SELECT * FROM categories_cours ;";
                                    $result = mysqli_query($conn,$sql) or die("Query Failed.");
                                    while($row = mysqli_fetch_assoc($result)){
                                echo"                
                                <option value='{$row['categories']}'>{$row['categories']}</option>
                                                ";}
                                ?>
                            </select>
                            <hr>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Short Description For Cours</label>
                                <textarea class="form-control" id="exampleFormControlTextarea3" rows="5" name="short_desc" required></textarea>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Long Description For Cours</label>
                                <textarea class="form-control" id="exampleFormControlTextarea3" rows="7" name="long_desc" required></textarea>
                            </div>
                            <hr>
                            <!-- E-mai -->
                            <div class="md-form mt-3">
                                <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="trainer_id" required>
                                <label for="materialSubscriptionFormPasswords">Trainer Id</label>
                            </div>

                            <div class="md-form mt-3">
                                <input type="text" id="materialSubscriptionFormPasswords" class="form-control" name="duration" required>
                                <label for="materialSubscriptionFormPasswords">Duration Of cours</label>
                            </div>

                            <div class="md-form mt-3">
                                <input type="number" id="materialSubscriptionFormPasswords" class="form-control" name="price" required>
                                <label for="materialSubscriptionFormPasswords">Price Of the cours</label>
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