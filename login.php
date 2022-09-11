<?php

$con = mysqli_connect('localhost', 'root', '', 'studious') or die("connection failed");

$mail = $_POST['mail'];
$password = $_POST['password'];
$query = "select * from user where email_id='$mail' and password = '$password'";
session_start();
$result = mysqli_query($con, $query);
$res = mysqli_fetch_array($result);
echo "Success";
$name=$res['user_name'];
$user_id=$res['user_id'];
$_SESSION['username']=$name;
$_SESSION['user_id']=$user_id;
$_SESSION['std']=9;

echo "<script> window.location.href = '../home.php' </script>";
?>