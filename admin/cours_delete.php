<?php
$id = $_GET['id'];
include "../config.php";
$sql = "DELETE FROM `courses` WHERE `courses`.`cours_id` = '{$id}';";
$result = mysqli_query($conn, $sql) or die("Query Failed.");
if (mysqli_query($conn, $sql))
    header("Location: {$url}/admin/all_courses.php");
?>