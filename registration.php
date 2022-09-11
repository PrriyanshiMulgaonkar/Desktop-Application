<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>StudioUs</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./js/createVali.js"></script>
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

<body onload="create()"> 
<section class="text-center text-lg-start" >

  <div class="container py-4 mar">
    <div class="row g-0 ">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form action="insertUser.php" method ="post">

            <div class="mb-3 row">
              <label for="staticEmail">Email</label>
                <input type="email"  onblur="validation()" name ="mail" class="form-control w-50 my-2" id="staticEmail" placeholder="email@example.com" required>
                <span id="err1" style="font-size: 10px;"></span>
            </div>
  
            <div class="mb-3 row">
              <label for="username">Username</label>
                <input type="text"  onblur="validation()" name="userName" class="form-control w-50 my-2" id="username" required>
                <span id="err3" style="font-size: 10px;"></span>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword">Password</label>
                <input type="password" name="pass"  onblur="validation()" class="form-control w-50 my-2" id="inputPassword" onblur="create()" required>
                <span id="err2" style="font-size: 10px;"></span>
            </div>
  
            <div class="mb-3 row">
              <label for="confirmPassword">Confirm Password</label>
                <input type="confirmPassword"  onchange="checkpass()" class="form-control w-50 my-2" id="cpass" required>
                <span id="err4" style="font-size: 10px;"></span>
            </div>

            <div >
              <button type="submit" class="btn btn-primary" onclick="validation()">Sign Up</button>
              <a href="index.php"><button type="button" class="btn btn-outline-secondary">Cancel</button></a>

            </div>
          </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://images.rawpixel.com/image_1000/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvdjIxMWJhdGNoMTEtcm9iYmluLTUxLXRlY2hub2xvZ3lfMi5qcGc.jpg" class="w-100 rounded-4 shadow-4"
          alt="create" />
      </div>
    </div>
  </div>
</section>
</body>