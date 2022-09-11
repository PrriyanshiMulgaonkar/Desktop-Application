<?php
 $con = mysqli_connect('localhost', 'root', '', 'studious') or die("<h1>Connection Failed...</h1>");
$s_id = $_POST['s_id'];

$query = "delete from student where s_id = $s_id";
$query1 = "delete from student_record where s_id = $s_id";
mysqli_query($con, $query);
mysqli_query($con, $query1);
echo "<script> window.location.href = '../home.php' </script>";
?>