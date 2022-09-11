<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>StudioUs</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./js/javascript.js"></script>

<body  onload="init()">

  <section class="margin">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action= "./login.php" method="post">
          
          <!-- <div class="w-50 m-5"> -->
            <div class="card-body w-75 text-start border border-2 m-2 p-3">
              <h5 class="card-title ">Sign In</h5>
              <h6 class="card-subtitle mb-4 text-muted ">Welcome back</h6>
              
              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="mail" id="staticEmail" placeholder="email@example.com" onblur="validation()" required>
                  <!-- <br> -->
                  <span id="err1" style="font-size: 10px;"></span>
        
                </div>
              </div>
              <div class="mb-4 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" name="password" class="form-control" id="inputPassword" onclick="validation()" required>
                  <!-- <br> -->
                  <span id="err2" style="font-size: 10px;"></span>
                </div>
                <!-- </div> -->
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember Me</label>
          </div>
          
          <div  class="mb-3" >
            <button type="submit" class="btn btn-primary" onclick="validation()">Sign In</button>
            <a href="registration.php"><button type="button" class="btn btn-outline-secondary">Create Account</button></a>
          </div>
        </form>
      </section>
    </body>