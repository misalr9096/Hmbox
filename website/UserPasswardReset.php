<?php
require('./database.php');
function is_valid_passwords($pass,$confirmpass) 
     {
          // Your validation code.
          if (empty($pass)) {
              echo "<script>alert('Password is required.')</script>";
              return false;
          } 
          else if ($pass != $confirmpass) {
              echo "<script>alert('Your passwords do not match. Please type carefully.')</script>";
              return false;
          }
          // passwords match
          return true;
     }
if (isset($_POST['submit'])) {
    $uname = $_POST['email'];
    $passward = $_POST['password'];
    $cpassward = $_POST['cpassword'];

    $sql = "select * from  user_registration where email='" . $uname . "'";

    $result = mysqli_query($conn, $sql);
  
    if (mysqli_num_rows($result) == 1) {
  
        if(is_valid_passwords($passward,$cpassward)){
        $query="UPDATE user_registration SET password = $passward, cpassword = $cpassward WHERE email='" . $uname . "'";
        
        $data = mysqli_query($conn, $query);
        if($data){
            header("Location:  ./index.php");
        }else{
            echo ("<script type='text/javascript'>alert('Something went wrong...!');</script>");
        }
    }
       
      

    } else {
       
        echo ("<script type='text/javascript'>alert('Email not Found...!');</script>");
    
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userdashboard.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Reset Password</title>
    <style>
          * {
        padding: 0;
        margin: 0;
        font-family: 'Alkatra', cursive;
        text-decoration: none !important;
        }
    </style>
</head>
<body>
    <div class="container py-5  d-flex justify-content-center align-items-center">

        <div class="row d-flex justify-content-center align-items-center w-75">
            <div class="col">
                <div class="card card-registration my-4 shadow rounded-3 p-5 d-flex justify-content-center align-items-center" style="border: none; background-color: #DCF1FF;">

                    <form class="w-50 d-flex align-items-center justify-content-center flex-column" method="post" >
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1" class="fs-5">Email address</label>
                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter email">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1" class="fs-5">New Password</label>
                            <input type="password" class="form-control form-control-lg" id="exampleInputEmail1" name="password" aria-describedby="emailHelp" required  placeholder="Enter password">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1" class="fs-5">Confirm Password</label>
                            <input type="password" class="form-control form-control-lg" id="exampleInputEmail1" name="cpassword" aria-describedby="emailHelp" required  placeholder="Re-enter password ">
                        </div>

                        <button type="submit" class="btn mt-4 shadow" name="submit" style="
                 
                    color: #262626;
                    font-size: 18px;
                    background-color: #9AC9DF;
                    ">Reset Password</button>
                     

                    </form>

                </div>
            </div>
        </div>
</body>
</html>