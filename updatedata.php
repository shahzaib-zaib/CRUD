<?php
$stu_sid = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$con = mysqli_connect("localhost", "root", "", "crud") or die("connect Faild");

$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = {$stu_sid}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

header("location:index.php");

mysqli_close($con);

?>