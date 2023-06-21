<?php
$isSuccess = 0;
$message = "";
require('./database.php');

session_start();

if (isset($_POST['submit'])) {
  $uname = $_POST['username'];
  $passward = $_POST['passward'];

  $sql = "select * from  user_registration where email='" . $uname . "' and password='" . $passward . "' limit 1";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $isSuccess = 1;
  }


  if ($isSuccess == 0) {
 
    echo "<script type='text/javascript'>alert('Invalid Username or Password!...');</script>";

  } else {
    while ($row = mysqli_fetch_assoc($result)) {
      $mobile = $row["phone"];
      $image = $row["user_image"];
    }
    
    $_SESSION['username']=$uname;
    $_SESSION['phone']=$mobile;
    $_SESSION['user_image']=$image;
  
    
    header("Location:  ./UserDashboard.php");
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserLogin</title>

    <link rel="stylesheet" href="./userlogin.css">
 <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  *{
padding: 0;
margin: 0;
box-sizing: border-box;  
font-family: 'Alkatra', cursive;
}
</style>
<body>
    <section class="h-100 gradient-form" >
        <div class="container py-5 h-50" >
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10" >
              <div class="card rounded-3 text-black shadow" style="border: none; background: none;background-color: #DCF1FF" >
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="../images/black-logo (2).png"
                          style="width: 150px" alt="logo"/>
                        <h4 class="mt-3 mb-5 pb-1 fs-3" style="color: #262626;">We are The HmBox Team</h4>
                      </div>
      
                      <form method="post" action="#">
                        <p style="color: #262626;" >Please login to your account</p>
      
                        <div class="form-outline mb-4"> 
                          <label class="form-label fs-4"  for="form2Example11" name="Username" style="color: #262626;">Username</label>
                           <input type="email" id="form2Example11" name="username"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  class="form-control"
                            placeholder="Phone number or email address" />
                  
                        </div>
      
                        <div class="form-outline mb-4">
                          <label class="form-label fs-4" for="form2Example22"  style="color: #262626;">Password</label>
                          <input type="password" id="form2Example22" required  name="passward" class="form-control" />
                          
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                        <input type="submit"  name="submit" class="btn shadow m-4" style="height:40px;color:#262626;font-size:18px;background-color:#9AC9DF;width:150px" value="Log in"></input>
                          <a class="text-muted" href="./ForgetPassward.php" style="text-decoration:none;">Forgot password?</a>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2" style="color: #262626;">Don't have an account?</p>
                          <a href="./UserRegistration.php"><button type="button" class="btn btn-outline-danger">Create new</button></a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-end gradient-custom-2 justify-content-center ">
                    <div class="px-3 py-4 p-md-5 mx-md-4  d-none d-lg-block ">  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>