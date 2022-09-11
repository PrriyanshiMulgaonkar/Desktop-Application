<?php
$con = mysqli_connect('localhost', 'root', '', 'studious') or die("connection failed");
session_start();
$name = $_SESSION['username'];
$user_id = $_SESSION['user_id'];

$query11 = "select * from student_record as a join student as b where a.s_id = b.s_id";
$resu = mysqli_query($con, $query11);

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>StudioUs</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body class="justify-content-left">
<?php include('./nav.php'); ?>
<section class="mar align-self-center">
  <div class="card text-start ms-5 p-5" style="width: 25rem;">
    <h2>Student Profile</h2>
    <?php $arr = mysqli_fetch_array($resu) ?>
    <span><b>Name: </b><?php echo $arr['sname'] ?></span><br>
    <span><b>Gender: </b><?php echo $arr['gender'] ?></span><br>
    <span><b>Standard: </b><?php echo $arr['standard'] ?></span><br>
    <span><b>School: </b><?php echo $arr['school'] ?></span><br>
    <span><b>Guardian Name: </b><?php echo $arr['gname'] ?></span><br>
    <span><b>Guardian Contact No.: </b><?php echo $arr['gphone'] ?></span><br>
    <span><b>Personal Contact No.: </b><?php echo $arr['personal_no'] ?></span><br>
    <span><b>Marks: </b><?php echo $arr['marks'] ?></span><br>
    <span><b>Fees Status: </b><?php echo $arr['fees_status'] ?></span><br>
    <span><b>Attendance:</b> <?php echo $arr['attend_count'] ?></span>
  </div>
  
</section>
</body>