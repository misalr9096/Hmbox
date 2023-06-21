<?php
session_start();
require('./database.php');

if (!isset($_SESSION['username'])) {
    header("location : AdminLogin.php");
}else{
    $sql1 = "select * from user_registration";
    $resCount = mysqli_query($conn, $sql1);

    $sql2 = "select * from customer_details";
    $cusCount = mysqli_query($conn, $sql2);

    $sql3 = "select * from user_complaints";
    $comCount = mysqli_query($conn, $sql3);

    $sql4 = "select * from enquire_details";
    $enqCount = mysqli_query($conn, $sql4);


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminHome</title>
   <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap"
    rel="stylesheet" />
<link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
<script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: 'Alkatra', cursive;
        text-decoration: none !important;
        }
    </style>
<body>
    <div class="container-fluid" style="height: 600px;">
        <div class="card shadow p-3 mt-5 "  style="border: none; background-color: #dcf1ff"  style="background: none;">
            <div class="container overflow-hidden d-flex justify-content-center">
                <div class="row gy-5">
                  <div class="col-6 col-md-6 col-sm-6 d-flex justify-content-center">
                    <div class="card text-white bg-primary mb-3 shadow" style="width: 15rem; height:10rem ;">
                        <div class="card-body">
                          <h5 class="card-title text-center fs-2"><?php echo mysqli_num_rows($resCount); ?></h5>
                          <p class="card-text fs-5"  style="font-family: 'Kalam', cursive; font-weight:bold;text-align: center;">Registered Users</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-6 col-sm-6 d-flex justify-content-center ">
                    <div class="card text-white bg-danger mb-3 shadow" style="width: 15rem;height:10rem ;">
                        <div class="card-body">
                            <h5 class="card-title text-center fs-2"><?php echo mysqli_num_rows($enqCount); ?></h5>
                            <p class="card-text fs-5"  style="font-family: 'Kalam', cursive; font-weight:bold;text-align: center;">Enquires</p>
                          </div>
                      </div>
                  
                  </div>
                  <div class="col-6 col-md-6 col-sm-6 d-flex justify-content-center ">
                    <div class="card text-white bg-info mb-3 shadow" style="width: 15rem;height:10rem ;">
                     
                        <div class="card-body">
                            <h5 class="card-title text-center fs-2"><?php echo mysqli_num_rows($cusCount ); ?></h5>
                            <p class="card-text fs-5"  style="font-family: 'Kalam', cursive; font-weight:bold;text-align: center;">Customers</p>
                          </div>
                      </div>
                  
                  </div>
                  <div class="col-6 col-md-6 col-sm-6 d-flex justify-content-center ">
                    <div class="card text-white bg-warning y mb-3 shadow" style="width: 15rem;height:10rem ;">
                      
                        <div class="card-body">
                            <h5 class="card-title text-center fs-2"><?php echo mysqli_num_rows($comCount); ; ?></h5>
                            <p class="card-text fs-5 "  style="font-family: 'Kalam', cursive; font-weight:bold; text-align: center;">Complaints</p>
                          </div>
                      </div>
               
                  </div>
                </div>
              </div>
        </div>
    </div>
</body>
</html>