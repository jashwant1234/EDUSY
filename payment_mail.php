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
  <?php
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM cours_enrollment where cours_id='{$id}' AND user_id='{$_SESSION["user_id"]}';";
  $result = mysqli_query($conn, $sql) or die("Query Failed.");
  if(mysqli_num_rows($result)>0){
            echo "<h3> you have alredy register for the cours</h3>";
  }
 else {
  $sql = "SELECT * FROM courses WHERE cours_id='{$id}';";
  $result = mysqli_query($conn, $sql) or die("Query Failed.");
  while ($row = mysqli_fetch_assoc($result)) {
      $cousr_name=$row['cours_name'];
      $price = (int)$row['cours_price']-(int)$row['cours_discount'];
  }
  $sql = "INSERT INTO cours_enrollment (user_id,cours_id,user_name,cours_name,price) VALUES 
  ('{$_SESSION["user_id"]}','{$id}','{$_SESSION["user_name"]}','{$cousr_name}','{$price}');";
  $result = mysqli_query($conn, $sql) or die("Query Failed.");
  //mail sending
  $subject='Edusy';
  $body = '<h1 align=center>subscribe my channel</h1>';
  include "mail.php";
  header("Location: {$url}/user_dashboard.php");
}
  ?>
  <!-- End your project here-->
  <!-- jQuery -->
</body>
<?php include "footer.php"; ?>
</html>
