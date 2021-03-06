
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
    <style>
        body {
            background-color: #EBEAEF
        }

        .container {
            flex-wrap: wrap
        }

        .card {
            border: none;
            border-radius: 10px;
            background-color: #4270C8;
            width: 350px;
            margin-top: -60px
        }

        p.mb-1 {
            font-size: 25px;
            color: #9FB7FD
        }

        .btn-primary {
            border: none;
            background: #5777DE;
            margin-bottom: 60px
        }

        .btn-primary small {
            color: #9FB7FD
        }

        .btn-primary span {
            font-size: 13px
        }

        .card.two {
            border-top-right-radius: 60px;
            border-top-left-radius: 0
        }

        .form-group {
            position: relative;
            margin-bottom: 2rem
        }

        .form-control {
            border: none;
            border-radius: 0;
            outline: 0;
            border-bottom: 1.5px solid #E6EBEE
        }

        .form-control:focus {
            box-shadow: none;
            border-radius: 0;
            border-bottom: 2px solid #8A97A8
        }

        .form-control-placeholder {
            position: absolute;
            top: 15px;
            left: 10px;
            transition: all 200ms;
            opacity: 0.5;
            font-size: 80%
        }

        .form-control:focus+.form-control-placeholder,
        .form-control:valid+.form-control-placeholder {
            font-size: 80%;
            transform: translate3d(0, -90%, 0);
            opacity: 1;
            top: 10px;
            color: #8B92AC
        }

        .btn-block {
            border: none;
            border-radius: 8px;
            background-color: #506CCF;
            padding: 10px 0 12px
        }

        .btn-block:focus {
            box-shadow: none
        }

        .btn-block span {
            font-size: 15px;
            color: #D0E6FF
        }
    </style>
    <?php include 'menu_bar.php'; ?>
</head>
<?php   
include "config.php";
if (isset($_SESSION["first_name"])) {
    header("Location: {$url}/index.php");
}
?>
<body>
    <!-- Start your project here-->
    <div class="container d-flex justify-content-center">
        <div class="d-flex flex-column justify-content-between">
            <div class="card mt-3 p-5">
                <div class="logo mb-3"><img src="https://imgur.com/zydrQCr.png"></div>
                <div>
                    <p class="mb-1">Start managing your</p>
                    <h4 class="mb-5 text-white">money with us!</h4>
                </div>
                <a href="sign_up.php"><button class="btn btn-primary btn-lg"><small>Don't have an account?</small><span>&nbsp;Sign up</span> </button></a>
            </div>
            <div class="card two bg-white px-5 py-4 mb-3">
                <form action="login_save.php" method="POST" autocomplete="off">
                    <div class="form-group"><input type="email" class="form-control" id="email" name="email" required><label class="form-control-placeholder" for="mail">Email</label></div>
                    <div class="form-group"><input type="password" class="form-control" id="password" name="password" required><label class="form-control-placeholder" for="password">Password</label></div>
                    <button class="btn btn-primary btn-block btn-lg mt-1 mb-2" name="save"><span>Login<i class="fas fa-long-arrow-alt-right ml-2"></i></span></button>
                </form>
            </div>
        </div>
    </div>
    <!-- End your project here-->
    <!-- jQuery -->

    <?php include "footer.php"; ?>
</body>

</html>