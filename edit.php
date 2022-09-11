<?php
 $con = mysqli_connect('localhost', 'root', '', 'studious') or die("<h1>Connection Failed...</h1>");
$marks = $_POST['marks'];

$fees = $_POST['fees'];
if ($fees=="Pending") {
    $fees = $_POST["install"];
}
$s_id = $_POST['s_id'];

$query = "update student_record set marks ='$marks', fees_status='$fees' where s_id ='$s_id'";
    $result = mysqli_query($con, $query);
    echo "<script> window.location.href = '../editlist.php' </script>";
?>