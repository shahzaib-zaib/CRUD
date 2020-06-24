<?php

    $stu_id = $_GET['id'];

    include 'config.php';

    $sql = "DELETE FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

    header('location:index.php');

    mysqli_close($con);
?>