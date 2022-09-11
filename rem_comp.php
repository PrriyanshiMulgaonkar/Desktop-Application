<?php
 $con = mysqli_connect('localhost', 'root', '', 'studious') or die("<h1>Connection Failed...</h1>");
// $typ = $_POST['user'];
$r_id = $_POST['r_id'];

$query = "delete from reminder where r_id = $r_id";
$result = mysqli_query($con, $query);
echo "<script> window.location.href = '../home.php' </script>";
?>