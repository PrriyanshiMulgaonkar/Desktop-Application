<?php

$con = mysqli_connect('localhost', 'root', '', 'studious') or die("connection failed");

$mail = $_POST['std'];
$query = "select * from student where standard='$mail'";
session_start();
$result = mysqli_query($con, $query);
$res = mysqli_fetch_array($result);
echo "<script> window.location.href = './ninthlist.php' </script>";
?>