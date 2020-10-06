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
<?php
include "config.php";
if (!isset($_SESSION["first_name"])) {
    header("Location: {$url}/index.php");
}
?>
  <!-- Start your project here-->  
<br>
<br>

<div class="row jumbotrun">
<div class="col-md-2"></div>
<div class="col-md-8">
  <blockquote class="blockquote bq-primary">
  <p class="bq-title">Info notification</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum illo!
    Quidem, corporis at quae tempore nisi impedit cupiditate perferendis nesciunt, ex dolores doloremque!
    Sit, rem, in?
  </p>
</blockquote>
</div>
<div class="col-md-2"></div>
</div>
  <br>  
  <div class="row jumbotrun">
<div class="col-md-2"></div>
<div class="col-md-8">
<p class="note note-info"><strong>Note info:</strong>Lorem,ipsum dolor sit amet consectetur adipisicing elit.
  Cum doloremque officia laboriosam. Itaque ex obcaecati architecto! Qui necessitatibus delectus placeat illo
  rem id nisi consequatur esse, sint perspiciatis soluta porro?</p>
  <br>
  <?php
  include "config.php";
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  ?>
  <a href="payment_mail.php?id=<?php echo $id;?>">
 <button type="button" class="btn btn-outline-primary btn-rounded waves-effect">continue
  </button>
 </a>
</div>
<div class="col-md-2"></div>
</div>
 <!-- Start your project here-->

  <!-- End your project here-->
  <!-- jQuery -->

</body>
<?php include "footer.php"; ?>
</html>
