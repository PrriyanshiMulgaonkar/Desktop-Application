<?php
 $con = mysqli_connect('localhost', 'root', '', 'studious') or die("<h1>Connection Failed...</h1>");
// $typ = $_POST['user'];
$mail = $_POST['mail'];
$name = $_POST['userName'];
// $address = $_POST['address'];
// $phone = $_POST['phone'];
$password = $_POST['pass'];

$query = "insert into user (email_id, user_name, password) values('$mail', '$name', '$password')";
    $result = mysqli_query($con, $query);
    header('location:index.php');

?>