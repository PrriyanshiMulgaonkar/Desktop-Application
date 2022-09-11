<?php
session_start();
$name = $_SESSION['username'];
$user_id = $_SESSION['user_id'];
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
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<body>
<div class="card text-center w-80 d-flex sticky-top">
        <div class="bg-dark">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item p-2 item">
              <a class="nav-link text-light" href="home.php">Dashboard</a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link text-light" href="schedule.php">Schedule</a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link bg-light text-dark active" href="addStudent.php">Add Student</a>
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


        <div class="container-fluid">
          <div class="row">
            <div class="col-7">
                  <!-- <div class="align-self-centre"> -->
            <!-- <form> -->
                <div class="card-body w-75 text-start border border-2 m-5 p-4 line-self-centre">
                    <h5 class="card-title">Student Registration Form</h5>
                    <h6 class="card-subtitle mb-4 text-muted">Fill out the form carefully for registration</h6>

                    <form action="newStudent.php" method="post">

                        <div class="form-group text-start">
                            <div class="d-flex">
                                <div class="mb-3 ">
                                    <label for="name">Student Name</label>
                                    <input type="name" name ="sname" class="form-control " id="studentName"
                                    placeholder="Enter Student Name">
                                </div>
                                
                                <div class="form-group mx-5 w-25">
                                    <label for="Gender">Gender</label>
                                    <select id="inputState" class="form-control" name ="gender">
                                        <option>Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="mb-3">
                                    <label for="schoolname">School Name</label>
                                    <input type="text" name ="school" class="form-control" id="schoolName" placeholder="Enter School Name">
                                </div>
                                
                                <div class="form-group mx-5 w-25">
                                    <label for="Standard">Standard</label>
                                    <select id="inputState" name ="standard" class="form-control" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown">
                                    <option value = "9">9th Standard</option>
                                    <option  value = "10">10th Standard</option>
                                    <option  value = "11">11th Standard</option>
                                    <option  value = "12">12th Standard</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mb-3">
                                <label for="parents">Guardian Name</label>
                                <input type="name" name ="guardian" class="form-control" id="parents" placeholder="Enter Guardian Name">
                            </div>
                            
                            <div class="mb-3 mx-5 w-25">
                                <label for="contact">Guardian Number</label>
                                <input type="tel" name ="personal" class="form-control" id="number" placeholder="Enter Number">
                            </div>
                        </div>
                        
                        <div class="d-flex">
                            <div class="mb-3">
                                <label for="personal">Personal Contact Number</label>
                                <input type="tel" name ="gphone" class="form-control" id="number" placeholder="Enter Personal Number">
                            </div>
                        
                        </div>
                    </div>
                    <div>
                            <button type="submit" class="btn btn-primary">Add Student</button>
                            <a href="ninthlist.php"><button type="button"
                                    class="btn btn-outline-secondary">Cancel</button></a>
                        </div>
                      <!-- </div> -->
                      </form>
                    </div>
                    
                </div>
            <div class="col-5">
                    <img src="add.png" alt="" class="img-fluid">
            </div>
            </div>
            </div>
        </div>

    </div>
    </div>
</body>
