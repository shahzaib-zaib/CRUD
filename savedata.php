<?php

    echo $stu_name = $_POST['sname'];
    echo $stu_address = $_POST['saddress'];
    echo $stu_class = $_POST['class'];
    echo $stu_phone = $_POST['sphone'];

    $con = mysqli_connect("localhost", "root", "", "crud") or die("connect Faild");

    $sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('{}')";

    $result = mysqli_query($con, $sql) or die("Query Unseccessful.");


?>