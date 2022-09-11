<?php
$con = mysqli_connect('localhost', 'root', '', 'studious') or die("connection failed");
session_start();
$name = $_SESSION['username'];
$user_id = $_SESSION['user_id'];
// try {
  $std = $_POST['std'];
// } catch(Exception $e) {
//   $std = $_SESSION['std'];
// }
// $mail = $_POST['std'];
$_SESSION['std'] = $std;
$query = "select a.s_id, a.sname, b.marks, b.fees_status from student AS a join student_record AS b where standard='$std' and a.s_id =b.s_id order by marks asc";
// session_start();
$res = mysqli_query($con, $query);
// $res = mysqli_fetch_array($result);
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="./js/javascript.js"></script>
<script>
  $(document).ready(function(){
    $("#rem").click(function(){
      $(".remove").toggle();
    });
  });
</script>
  
<body >
<?php include('./nav.php'); ?>
    <section class="d-flex">
      <!-- <div class="dropdown align-self-start my-2">
        <button class=" btn btn-secondary dropdown-toggle bg-dark p-2 mx-2" type="button" id="dropdownMenuButton2"
          data-bs-toggle="dropdown" aria-expanded="false" unclickable>
          Standard</button>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
          <li><a class="dropdown-item" href="#">2021-21</a></li>
          <li><a class="dropdown-item" href="#">2020-21</a></li>
          <li><a class="dropdown-item" href="#">2019-20</a></li>
          <li>
            <hr class="dropdown-divider">
          </li> -->
          <!-- <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">Add study material</a></li> -->
        <!-- </ul>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Upload Media
        </button> -->
        
        

      <!-- </div> -->

      <div class="d-flex ms-auto align-items-center mx-2">
      <!-- <button onclick="removal()" id="rem">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-dash-circle"
        viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
      </svg>
    </button>   -->
      
      </div>
      <div class="d-flex align-items-center mx-2">
        <a class="text" href="editlist.php"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-pen"
          viewBox="0 0 16 16">
          <path
            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
        </svg> 
      </a>
    </section>
  </div>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">S No.</th>
        <th scope="col">Name</th>
        <th scope="col">Marks</th>
        <!-- <th scope="col">Overall Percentage</th> -->
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

          <th scope="row">1</th>
          <td><a href="profile.php"><?php echo $arr['sname'] ?></a></td>
          <td><?php echo $arr['marks'] ?></td>
          <td><?php echo $arr['fees_status'] ?></td>
          <td><div class="form-check">
            <input class="form-check-input" type="checkbox" id="Checkbox1" value = "1" >
            <!-- <label class="form-check-label" for="Checkbox1">Presnt</label> -->
          </div>
        </td>
        <td><form action="./db/remove_stu.php" method="post">
        <input hidden type="text" name="s_id" value=<?php echo $arr['s_id'] ?>>
          <button type ="submit" class="remove btn btn-outline-dark " >Remove</button></td>
      </form>
      </tr>
      <?php
        }
      ?>
      </tr>

    </tbody>
  </table>
</body>