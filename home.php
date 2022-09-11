<?php
session_start();
$name = $_SESSION['username'];
$user_id = $_SESSION['user_id'];

$con = mysqli_connect('localhost', 'root', '', 'studious') or die("connection failed");
$query = "select * from reminder where user_id='$user_id'";
$result = mysqli_query($con, $query);
// $res = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>StudioUs</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./database.js">

</script>
<body>
    <?php include('./nav.php'); ?>
        <!-- <div class="bg-dark text-end p-3">
            
        </div> -->
        </div>
        <section class=" d-flex">
        <section class="d-flex ms-3">
          <div class="card mx-2" style="width: 18rem;">
            <img src="09.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">9th Standard</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="./ninthlist.php" method='post'>
              <input name="std" type="text" hidden value ="9">
              <button class="btn btn-dark">Open</button>
              </form>
            </div>
            </div>
    
            <div class="card mx-2" style="width: 18rem;">
              <img src="10.png" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                <h5 class="card-title">10th Standard</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <form action="./ninthlist.php" method='post'>
                <input name="std" type="text" hidden value ="10">
                <button class="btn btn-dark">Open</button>
              </form>
              </div>
              </div>

              <div class="card mx-2" style="width: 18rem;">
                <img src="11.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">11th Standard</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <form action="./ninthlist.php" method='post'>
                  <input name="std" type="text" hidden value ="11">
                  <button class="btn btn-dark">Open</button>
                </form>
                </div>
                </div>

                <div class="card mx-2" style="width: 18rem;">
                  <img src="12.png" class="card-img-top img-fluid" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">12th Standard</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form action="./ninthlist.php" method='post'>
                    <input name="std" type="text" hidden value ="12">
                    <button class="btn btn-dark">Open</button>
                  </form>
                  </div>
                  </div>
            </section>

            <section class="border w-100 border-2 me-2">
              <div class="mx-2">
                <h4 class="mt-2">Reminder</h4>
                <ul>
                <?php
        while ($arr =mysqli_fetch_array($result)){
        ?>
                  <li>
                  <?php echo $arr['title']; ?> 
                  <ul>
                    <li>
                  <?php echo "Discription: ".$arr['description']; ?>
                  </li>
                    <li>
                  <?php echo "Completion Date: ". $arr['date']; ?>
                  </li>

                  <li>
                  <?php echo "Time: ". $arr['time']; ?>
                  </li>
                </ul>
                  </li>
                  <form action="./db/rem_comp.php" method ="post">  
                    <input type="text" readonly hidden name="r_id" value="<?php echo $arr['r_id'] ?> ">
                    <button type="submit" class="btn btn-outline-secondary align-items-end">Complete</button>
                  </form>
                  <?php
        }
      ?>
                </ul>
              </div>
            </section>
            
          </section>
          <div class="card mx-4 mt-2" style="width: 18rem;">
                  <img src="media.png" class="card-img-top img-fluid" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Media</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <form action="./ninthlist.php" method='post'>
                    <input name="std" type="text" hidden value ="12"> -->
                    <a href="mediaui.php"><button class="btn btn-dark">Open</button></a>
                  </form>
                  </div>
                  </div>
</body>
</html> 