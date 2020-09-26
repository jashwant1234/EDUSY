<?php 

    include "config.php";
    if (isset($_POST['save'])) {
        $user_name = mysqli_real_escape_string($conn,$_POST['email']);
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM user WHERE user_name='{$user_name}' and password='{$password}';";
        $result = mysqli_query($conn, $sql) or die("Query Failed.");
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                session_start();
                $_SESSION["user_id"]=$row['user_id'];
                $_SESSION["first_name"]=$row['first_name'];
                $_SESSION["last_name"]=$row['last_name'];
                $_SESSION["user_name"]=$row['user_name'];
            }
            header("Location: {$url}/index.php");
           
        } else {
            echo "<p style='color:red;text-align:center;margin:10px 0;'>User Name And password is not match</p>";
        }
    }
?>  