<?php
session_start();
$name = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>StudioUs</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<body>
<div class="card text-center w-80 d-flex sticky-top">
        <div class="bg-dark">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item p-2 item">
              <a class="nav-link text-light" href="home.php">Dashboard</a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link bg-light text-dark active" href="schedule.php">Schedule</a>
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
        <div class="d-flex container mar">
          <div class="d-flex border border-2 m-2 p-2 w-100 text-start mx-4 p-2 w-50" style="width: 25rem;">
              <div class="card-body w-50">
                <h5 class="card-title">Task Scheduler</h5>
                <h6 class="card-subtitle mb-2 text-muted">Manage your task</h6>
                <div class="form-group">
                  <form action="./db/rem_create.php" method="post">
                  <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                  </div>
                  
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Discription</label>
                    <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  
                  <div class="mb-3">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control" id="date">
                  </div>

                  <div class="mb-3">
                    <label for="time">Time</label>
                    <input type="time" name="time" class="form-control" id="time">
                  </div>

                  <div>
                    <button type="submit" class="btn btn-primary">Schedule Now</button>
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
                <div class="w-100 align-self-center">
                  <img src="scheduleimage.png" alt="" class="img-fluid mx-auto">
                </div>
        
        
        </div>
    </body>