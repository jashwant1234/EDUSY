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
if(isset($_POST['save'])){
    $sql = "INSERT INTO become_a_trainer (name,email,phone_number,experience,message) VALUES ('{$_POST['name']}'
    ,'{$_POST['email']}','{$_POST['phone_number']}','{$_POST['exprience']}','{$_POST['message']}');";
    mysqli_query($conn, $sql);
    $subject='Thank you for contacting us';
    $body = '<h1 align=center>subscribe my channel</h1>';
    include "mail.php";
    header("Location: {$url}/index.php");
}
?>  
  <!-- End your project here-->
  <!-- jQuery -->

</body>
<?php include "footer.php"; ?>
</html>
