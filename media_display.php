<?php

$con = mysqli_connect('localhost', 'root', '', 'studious') or die("connection failed");
session_start();
$standard = $_POST['std'];
$query = "select * from media where standard ='$standard'";
$_SESSION['standard'] = $standard;
$result4 = mysqli_query($con, $query);
// $res = mysqli_fetch_array($result);
echo $_SESSION['standard'];
$_SESSION['mid']="0";

echo "<script> window.location.href = '../mediaui.php' </script>";
?>