<?php
$con = mysqli_connect('localhost', 'root', '', 'studious') or die("connection failed");
session_start();
$name = $_SESSION['username'];
$user_id = $_SESSION['user_id'];

$std = $_SESSION['std'];
// $mail = $_POST['std'];
// $_SESSION['std'] = $std;
$query = "select b.s_id, a.sname, b.marks, b.fees_status from student AS a join student_record AS b where standard='$std' and a.s_id =b.s_id order by marks asc";
$res = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>StudioUs</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="./js/javascript.js"></script>
<body onload="Installment()">
<?php include('./nav.php'); ?>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">S No.</th>
        <th scope="col">Name</th>
        <th scope="col">Marks/600</th>
        <!-- <th scope="col">Overall Percentage</th> -->
        <th scope="col"></th>
        <th scope="col">Fess Status</th>
        <th scope="col">Attendance</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php
        while ($arr =mysqli_fetch_array($res)){
        ?>
        <tr>
          <form action="./db/edit.php" method="post">
            <th scope="row">1</th>
            <td><?php echo $arr['sname']; ?></td>
            <td><input name="marks" value=<?php echo $arr['marks'] ?>></td>
            <!-- <td><Input ><?php echo $arr['fees_status'] ?></Input></td> -->
            <td>
              <select id="inputState" class="form-control" name ="fees" onclick="Installment()">
                <option style="display: none;"><?php if ($arr['fees_status'] == "Paid" || $arr['fees_status'] == "Unpaid") {
                  echo $arr['fees_status'];
                } else {
                  echo "Pending";
                }
                ?></option>
                <option value="Paid">Paid</option>
                <option value="Unpaid">Unpaid</option>
                <option value="Pending">Pending</option>
                  <!-- <option>Installment-II</option> -->
                </select> 
                <td id="install"><input class = "w-25 ms-auto" type="text" name = "install" value = <?php echo $arr['fees_status'] ?>></td>
              </td>
              <td>..</td>
              <td>
                <input hidden name='s_id' value=<?php echo $arr['s_id']; ?>>  
                <button type="submit" class="btn btn-dark ms-auto">Save</button></td>
              </form>
        </tr>
        <?php
        }
      ?>
      </tr>
    </tbody>
  </table>
  <div class="text-end">

  <a href="home.php"><button type="button" class="btn btn-outline-secondary me-5">Cancel</button></a>
  </div>
  <script>
    function Installment(){
      var a  = document.getElementById('inputState').value;
      var install = document.getElementById('install');
      if (a=="Paid" || a=="Unpaid") {
        console.log(a);
        install.style.display="none";
      }
      else{
        install.style.display="inline-block";
      }
    }
//   $("#inputState").click(function(){
//   $("#install").hide();
// });
</script>
</body>
</html>