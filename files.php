<?php

$con = mysqli_connect('localhost', 'root', '', 'studious') or die("connection failed");
// session_start();
// echo $_SESSION['standard'];
$standard = $_SESSION['standard'];
$query = "select * from media where standard ='$standard'";

$result4 = mysqli_query($con, $query);

?>