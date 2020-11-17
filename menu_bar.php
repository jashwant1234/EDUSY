<body>
  <!-- Start your project here-->
  <nav class="navbar navbar-expand-lg navbar-dark blue-gradient">
    <a class="navbar-brand" href="index.php">
      <img src="img/LOGO.png" width="30" height="30" alt="" loading="lazy">
    </a>
    <a class="navbar-brand" href="#"><img rel="icon" href="img/mdb-favicon.ico" type="image/x-icon"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <?php
          session_start();
          include "config.php";
          if (isset($_SESSION["first_name"])) {
          echo '<a class="nav-link" href="user_dashboard.php">Dashboard</a>';
          }else
          echo '<a class="nav-link" href="login.php"><i class="fas fa-user"></i>Login</a>';
        ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url ;?>/courses.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url ;?>/gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url ;?>/about_us.php">about us</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End your project here-->
  <!-- jQuery -->

  </html>