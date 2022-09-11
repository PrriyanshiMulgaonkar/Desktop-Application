<?php
session_start();
$name = $_SESSION['username'];
$user_id = $_SESSION['user_id'];
// $name = "abhisar";
// $user_id = "2";

// echo $_SESSION['standard'];
$con = mysqli_connect('localhost', 'root', '', 'studious') or die("connection failed");
$query = "select distinct standard from student order by standard asc";
$result = mysqli_query($con, $query);
// $res = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>StudioUs</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="./css/style.css"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- <script src="./database.js"> -->

</script>
<body>
    <?php include('./nav.php'); ?>

    <?php
        while ($arr =mysqli_fetch_array($result)){
        ?>
    <form action="./db/media_display.php" method="post" class="mt-4">
        <input name="std" hidden type="text" value ="<?php echo $arr['standard']; ?>">
        <button class="btn btn-dark" id="medi" type="submit" value ="<?php echo $arr['standard'] ?>"><?php echo $arr['standard']; ?>th standard</button>
    </form>
    <?php 
        }
    ?>
<?php 
// if(isset($_SESSION['mid']) && !empty($_SESSION['mid'])) {
    include('./db/files.php');
    // echo $_SESSION['mid'];

                        ?>
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">S No.</th>
        <th scope="col">Title</th>
        <!-- <th scope="col">Overall Percentage</th> -->
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
        while ($arr =mysqli_fetch_array($result4)){
        ?>
        <tr>
          <th scope="row">1</th>
          <form action="./db/file.php" method="post"> 
            <td><button type="submit"><?php echo $arr['title'] ?></button></td>
            <td><input type="text" hidden name="fle" value="./<?php echo $arr['media'] ?>"></td>
          </form>
      </tr>
      <?php
        }
      ?>
      </tr>

    </tbody>
  </table>
  <?php
  //  } 
  ?>
</body>