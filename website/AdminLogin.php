<?php
$isSuccess = 0;
$message = "";
require('./database.php');
session_start();
if (isset($_POST['submit'])) {
  $uname = $_POST['username'];
  $passward = $_POST['passward'];

  $sql = "select * from admin_login where username='" . $uname . "' and passward='" . $passward . "' limit 2";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $isSuccess = 1;
  }

  if ($isSuccess == 0) {
 
    echo "<script type='text/javascript'>alert('Invalid Username or Password!...');</script>";

  } else {
    $_SESSION['username']=$uname;
    $_SESSION['success']="You are Logged in";
    
    header("Location:  ./AdminDashboard.php");
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminlogin.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet">
    <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

    <title>AdminLogin</title>
</head>
<body>
    <section class="gradient-form" >
        <div class="container py-5  d-flex justify-content-center align-content-center">
         <div class=" col-sm-12 col-lg-5 col-xl-5 col-md-12 m-5 card rounded-3 shadow text-black" style= "background-color:  #DCF1FF;border: none;">
         <h2 class="card-title text-center mt-3">Admin Login</h2>
         
         <div class="text-center">
                        <img src="../images/black-logo (2).png" style=" width: 150px"  alt="logo" />
                      </div>
        <div class="card-body ">
          <form method="post" action="" class="d-flex justify-content-center align-content-center flex-column">
                        <div class="form-outline mb-4 ">
                          <label class="form-label fs-4" for="form2Example11" style="color: #262626;">
                            Username
                          </label>
                          <input
                            type="email"
                            id="form2Example11"
                            class="form-control"
                            placeholder="Phone number or email address"
                            name="username"
                            required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                          />
                          
                        </div>

                        <div class="form-outline mb-4">
                          <label class="form-label fs-4" for="form2Example22" style="color: #262626;">
                            Password
                          </label>
                          <input
                            type="password"
                            id="form2Example22"
                            class="form-control"
                            name="passward"
                          />
                       
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                          <Link>
                            <input
                              type="submit"
                              class="btn shadow m-4"
                              name="submit"
                              value="Log in"
                              style="
                                height: 40px;
                                color: #262626;
                                font-size: 18px;
                                background-color: #9AC9DF;
                                width: 150px;
                              "
                            >
                            </input>
                          </Link>
                          <a class="text-muted" href="./AdminForgetPassward.php" style="color: #262626;">
                            Forgot password?
                          </a>
                        </div>
                      </form
        </div>
      </div>
         
      </section>
</body>
</html>