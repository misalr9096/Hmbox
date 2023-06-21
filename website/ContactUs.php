<?php
require('./database.php');
$db = $conn;

if (isset($_POST['register_btn'])) {
  $name = $_POST['name'];
  $mobileno = $_POST['mobileno'];
  $subject = $_POST['subject'];
  $complaint = $_POST['complaint'];

  // echo $name;
  // echo $mobileno;
  // echo $subject;
  // echo $complaint;
  // Check connection // header

  if ($db === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  $sql = "INSERT INTO user_complaints (name,mobileno,subject,complaint) VALUES ('$name','$mobileno','$subject','$complaint')";
  if (mysqli_query($db, $sql)) {

    echo "<script>
                  alert('Complaint registered Successfully..!'); 
                  </script>";
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
  <title>ContactUs</title>
  <!-- Our Custom CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</head>
<style>
  * {
    font-family: 'Alkatra', cursive;
  }
</style>

<body>
  <div class="container-fluid" style="height: 600px;">
    <h2 class="text-center fs-1 " style="color: black;">Complaint</h2>
    <form class="card shadow p-5 " style="border: none; background-color: #DCF1FF;" action="" method="post">
      <div class="container overflow-hidden">
        <div class="row gy-5">
          <div class="col-6">
            <div class="form-outline ">
              <label class="form-label fs-4 text-center" style="color: #262626; " for="inlineRadio1" pattern="[A-Za-z]+">Name</label>
              <input type="text" id="form2Example11" class="form-control " required name="name" />
              <div class="form-outline ">
                <label class="form-label fs-4 text-center" style="color: #262626; " for="inlineRadio1">Contact No</label>
                <input type="tel" id="form2Example22" class="form-control " pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$" required name="mobileno" />
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-outline ">
              <label class="form-label fs-4 text-center" style="color: #262626; " for="inlineRadio1" pattern="[A-Za-z]+"> Subject</label>
              <input type="text" id="form2Example33" class="form-control " required name="subject" />
            </div>
            <div class="form-outline">
              <label class="form-label fs-4 text-center" style="color: #262626; ">Complaint</label>
              <textarea class="form-control " id="textAreaExample1" required pattern="[A-Za-z]+" rows="4" name="complaint"></textarea>

            </div>
          </div>
        </div>
        <div class="form-group mt-3">
          <div class=" d-flex align-content-center justify-content-center">
            <input type="submit" class="btn shadow" name="register_btn" style="
                      border-radius: 50px;
              height: 50px;
              color: #262626;
              font-size: 18px;
              background-color: #9AC9DF;
              width: 150px;" />
            </input>
          </div>
        </div>
    </form>
  </div>
</body>

</html>