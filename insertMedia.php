<?php
$con = mysqli_connect('localhost', 'root', '', 'studious') or die("<h1>Connection Failed</h1>");
$name = $_POST['title'];
$std = $_POST['standard'];
$FILE  = $_FILES['pic'];

echo"<pre>";
print_r($FILE);

$tempath = $_FILES['pic']['tmp_name'];
$fname = $_FILES['pic']['name'];
$a = explode(".", $fname);
$text = $a[count($a)-1];
$newname = time().".".$text;
$uploadpath = "media/$newname";
move_uploaded_file($tempath, $uploadpath);
$query="insert into media (title,standard, media) values ('$name','$std', '$uploadpath')";
$res = mysqli_query($con, $query);
echo"success";
?>