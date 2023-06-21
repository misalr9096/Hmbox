<?php
require('../Database/database.php');
$db = $conn;

if (isset($_POST['register_btn'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $mobile = $_POST['mobileno'];

  // echo $fname;
  // echo $lname;
  // echo $email;
  // echo $mobile;

  // Check connection // header

  if ($db === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  $sql = "INSERT INTO enquire_details (fname,lname,email,mobileno) VALUES ('$fname','$lname','$email','$mobile')";
  if (mysqli_query($db, $sql)) {

?>
    <meta http-equiv="refresh" content="0; url=http://localhost/Module/NewProject/Html/">
<?php

  } else {


    echo "<script>
    alert('Something went worng..!'); 
    </script>";
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="enquire.css">
  <title>Enquire</title>
  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Alkatra', cursive;
  }
</style>

<body>
  <section class="h-100">
    <div class="container py-5  d-flex justify-content-center align-items-center">
      <div class="row d-flex justify-content-center align-items-center w-75">
        <div class="col">
          <div class="card card-registration my-4 shadow rounded-3 " style="border: none;">
            <div class="row g-0">
              <div class="col-xl-5 d-none d-xl-block " style="overflow: hidden; ">
                <img src="../images/dabawaleenquri.jpg" alt="Sample photo" class="img-fluid h-100 w-100" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; " />
              </div>
              <div class="col-xl-7  " style="background-color: #DCF1FF; border-top-right-radius: 9px;border-bottom-right-radius: 9px;">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase" style="color: 4B49Ac;">Enquire</h3>

                  <form name="myForm" action="" method="post">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline ">
                          <label class="form-label fs-4" for="form3Example1m" style="color: #262626;">First name</label>
                          <input type="text" id="fname" class="form-control form-control-lg" required name="fname" pattern="[A-Za-z]+" title="Enter valid name" />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label fs-4" for="form3Example1n" style="color: #262626;">Last name</label>
                          <input type="text" id="lname" class="form-control form-control-lg" required name="lname" pattern="[A-Za-z]+" title="Enter valid name" />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label fs-4" for="form3Example1n" style="color: #262626;">Mobile No</label>
                          <input type="text" class="form-control form-control-lg" required name="mobileno" id="myform_phone" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$" />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label fs-4" for="form3Example1n" style="color: #262626;">Email id</label>
                          <input type="email" id="email" class="form-control form-control-lg" required name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                        </div>
                      </div>

                    </div>
                    <div class="d-flex justify-content-end pt-3">
                      <input type="reset" value="Reset all" class="btn  btn-lg shadow rounded-3 d-block" style="background-color: #9AC9DF;color: #262626;"></input>
                      <input type="submit" value="Submit" name="register_btn" class="btn  btn-lg ms-2 shadow rounded-3 d-block" style="background-color: #9AC9DF;color: #262626;"> </input>
                    </div>

                  </form>
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