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
    $u_id=$_GET['u_id'];
    $c_id=$_GET['c_id'];
    if(empty($_POST['status'])) 
    $top='pending';
    else 
    $top="paid";
    $sql = "UPDATE cours_enrollment SET status='{$top}' where cours_id = '{$c_id}' and user_id= '{$u_id}';";
    
    if(mysqli_query($conn,$sql)){
        header("Location: {$url}/admin/cours_enrollment.php");
      }else{
          echo "<div class='alert alert-danger'>Query Failed.</div>";
      }
}
else{
    $u_id=$_GET['u_id'];
    $c_id=$_GET['c_id'];    
    $sql1="SELECT * FROM cours_enrollment WHERE cours_id = '{$c_id}' and user_id= '{$u_id}';";
    $result = mysqli_query($conn, $sql1) or die("Query Failed.");
    while($row1 = mysqli_fetch_assoc($result)) {
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
                                <a href="" target="_blank">Update status</a>
                            </p>
                         
                            <div class=" form-check">
                            <input  type="checkbox" class="form-check-input" id="materialUnchecked" name="status"<?php if($row1['status']!='pending')echo 'checked';}}?>>
                            <label style="float:left;" class="form-check-label" for="materialUnchecked">status</label>
                            </div>
                            <!-- Sign in button -->
                            <br>
                            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="save">update</button>          
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