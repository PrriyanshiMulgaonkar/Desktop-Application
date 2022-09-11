<!--  -->
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>StudioUs</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./database.js">
<script src="./js/javascript.js">

</script>

</head>
<body >
    <div class="card text-center w-80 d-flex sticky-top">
        <div class="bg-dark">
          <ul class="nav nav-pills card-header-pills ">
            <li class="nav-item p-2 item">
              <a class="nav-link bg-light text-dark active" href="home.php">Dashboard</a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link text-light item" href="schedule.php">Schedule</a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link text-light" href="addStudent.php">Add Student</a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link text-light" href="media.php">Upload Media</a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link text-light" href="index.php">Log Out</a>
            </li>
            <h3 class="text-light text-end ms-auto mx-4 "><?php echo $name; ?></h3>
          </ul>
        </div>

       
</body>