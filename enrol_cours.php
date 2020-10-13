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
<?php
include "config.php";
if (!isset($_SESSION["first_name"])) {
  header("Location: {$url}/index.php");
}
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT * FROM cours_enrollment where cours_id='{$id}' and user_id='{$_SESSION['user_id']}';";
$result = mysqli_query($conn, $sql) or die("Query Failed.");
while ($row = mysqli_fetch_assoc($result)) {
  if ($row['status'] != 'paid')
    header("Location: {$url}/user_dashboard.php");
}
?>

<body>
  <!-- Start your project here-->
  <div class="container">
    <br>
    <?php
    $sql = "SELECT * FROM courses where cours_id='{$id}';";
        $result = mysqli_query($conn, $sql) or die("Query Failed.");
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
    <h2 class="article__title"><?php echo $row['cours_name'];}?></h2>
    <hr>
    <br>
    <h2 class="article__title">Online class schedule</h2>
    <br>
    <table class="table">
      <thead class="black white-text">
        <tr>
          <th scope="col">Sl</th>
          <th scope="col-">Topic</th>
          <th scope="col">link for the class</th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM cours_schedule where cours_id='{$id}' and type='class';";
        $result = mysqli_query($conn, $sql) or die("Query Failed.");
        $x = 1;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <th scope="row"><?php echo $x; ?></th>
            <td><?php echo $row['dsc']; ?></td>
            <td><a href="<?php echo $row['link']; ?>">click here to join</a></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
          </tr>
        <?php $x++;
        } ?>
      </tbody>
    </table>
    <br>
    <br>
    <h2 class="article__title">Online video for the class</h2>
    <br>
    <table class="table">
      <thead class="black white-text">
        <tr>
          <th scope="col">Sl</th>
          <th scope="col-">Topic</th>
          <th scope="col">link for the video</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM cours_schedule where cours_id='{$id}' and type='video';";
        $result = mysqli_query($conn, $sql) or die("Query Failed.");
        $x = 1;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <th scope="row"><?php echo $x; ?></th>
            <td><?php echo $row['dsc']; ?></td>
            <td><a href="<?php echo $row['link']; ?>">click here to open</a></td>
          </tr>
        <?php $x++;
        } ?>
      </tbody>
    </table>
  </div>
  <!-- End your project here-->
  <!-- jQuery -->

</body>
<?php include "footer.php"; ?>

</html>