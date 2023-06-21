<?php
require('./database.php');

session_start();

if (!isset($_SESSION['username'])) {
  header("location : UserLogin.php");
} else {

  $uname = $_SESSION['username'];

  $sql = "SELECT * from user_registration NATURAL JOIN customer_details;";

  $data = mysqli_query($conn, $sql);
  $total = mysqli_num_rows($data);
  $result = mysqli_fetch_assoc($data);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</head>

<body>
  <div class="container-fluid" style="height: 600px;">
    <h2 class="text-center fs-1" style="color: black;">Meal Information</h2>
    <div class="row d-flex align-items-center justify-content-center mt-5">
      <div class="col-lg-4 col-md-4 col-sm-4 ">
        <div class="card shadow p-3 text-#262626 mb-3" style="border: none; background-color: #DCF1FF;">
          <div class="card-body">
            <h3 class="card-title " style=" color: #262626;">Start Date</h3>
            <h5 class="fs-2" style=" color: #262626;"><?php 
              if($total){
                  echo  $result['startdate'];
              }
              else{
                  echo 0;
              }
            ?></h5>
            </h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4  ">
        <div class="card shadow p-3 text-#262626 mb-3" style="background-color: #DCF1FF; border: none;">
          <div class="card-body">
            <h3 class="card-title " style=" color: #262626;">End Date</h3>
            <h5 class="fs-2" style=" color: #262626;">
            <?php
            if($total){
                  echo  $result['enddate'];
              }
              else{
                  echo 0;
              }
            ?>
          </h5>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>

</html>