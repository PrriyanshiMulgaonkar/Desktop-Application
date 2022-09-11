<?php
 $con = mysqli_connect('localhost', 'root', '', 'studious') or die("<h1>Connection Failed...</h1>");
// $typ = $_POST['user'];
$sname = $_POST['sname'];
$gender = $_POST['gender'];
$school = $_POST['school'];
$guardian = $_POST['guardian'];
$gphone = $_POST['gphone'];
$personal = $_POST['personal'];
$standard = $_POST['standard'];

$query = "insert into student (sname, gender, school, gname, gphone, personal_no, standard) values('$sname', '$gender', '$school', '$guardian', '$gphone', '$personal', '$standard')";
    $result = mysqli_query($con, $query);

    echo "<script> window.location.href = './home.php' </script>";
?>