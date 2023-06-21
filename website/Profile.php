<?php
session_start();
require('./database.php');
if (!isset($_SESSION['username'])) {
  header("location : UserLogin.php");
} else {

  $uname = $_SESSION['username'];

  $sql = "select * from user_registration where email='" . $uname . "'";

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
  <link rel="stylesheet" href="userdashboard.css">
  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <title>Profile</title>
  <style>
    * {
      font-family: 'Alkatra', cursive;
    }

    input {
      border: none;
    }
  </style>
</head>

<body>
  <div class="container-fluid " style="height: 600px;">
    <h2 class="text-center fs-1" style="color: black;">Profile</h2>
    <form class="card shadow p-3 " style="border: none; background-color: #DCF1FF;" action="#" class="form-control" method="POST" enctype="multipart/form-data">
      <div class="container">

        <div class="col-12 d-flex justify-content-center align-items-center flex-column">
          <img class="image-fluid m-2" src="./uploads/<?= $_SESSION['user_image'] ?>" style="display: block; border:none; border-radius: 50%; height: 150px; width: 150px;" />
          <label class="btn mt-1" for="my-file-selector" style="background-color: #9AC9DF;">
            <input id="my-file-selector" name="uploadfile" type="file" class="d-none">
            Change
          </label>

        </div>
        <div class="container px-4">
          <div class="row gx-5">
            <div class="col">
              <div class="form-outline mb-3">
                <label class="form-label fs-3" for="form3Example9">First Name</label>
                <input type="text" name="fname" id="form3Example9" class="form-control form-control-lg" pattern="[A-Za-z0-9]+" value="<?php echo $result['fname'] ?>" />
              </div>

              <div class="form-outline mb-3">
                <label class="form-label fs-4" for="form3Example90">Last Name</label>
                <input type="text" name="lname" required id="form3Example90" class="form-control form-control-lg" pattern="[A-Za-z0-9]+" value="<?php echo $result['lname'] ?>" />

              </div>



            </div>
            <div class="col">
              <div class="form-outline mb-3">
                <label class="form-label fs-4" for="form3Example9">Mobile No</label>
                <input type="text" name="mobile" id="form3Example9" class="form-control form-control-lg" pattern="[0-9]{10}" value="<?php echo $result['phone'] ?>" />
              </div>

              <div class="form-outline mb-3">
                <label class="form-label fs-4" for="form3Example90">Address</label>
                <input type="text" name="address" required id="form3Example90" class="form-control form-control-lg" value="<?php echo $result['address'] ?>" />

              </div>


            </div>
          </div>
        </div>
      </div>


      <div class="form-group mt-3">
        <div class=" d-flex align-content-center justify-content-center">

          <input type="submit" class="btn shadow " name="update" value="Edit" style="
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

<?php
//error_reporting(0);
if (isset($_POST['update'])) {

  require('./database.php');

  $img_name = $_FILES["uploadfile"]["name"];
  $img_size = $_FILES["uploadfile"]['size'];
  $temp_name = $_FILES["uploadfile"]["tmp_name"];
  $error = $_FILES['uploadfile']['error'];

      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);
      $allowed_exs = array("jpg", "jpeg", "png");

      if (in_array($img_ex_lc, $allowed_exs)) {

        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $img_upload_path = 'uploads/' . $new_img_name;
        move_uploaded_file($temp_name, $img_upload_path);
      } else {
        echo "<script>alert('Sorry , file type is not supported..!')</script>";
      }
    
  
  $fname  = $_POST['fname'];
  $lname  = $_POST['lname'];
  $address    = $_POST['address'];
  $phone  = $_POST['mobile'];

  if ($fname != "" && $lname != "" && $address != "" && $phone != "") {
    //For Updation
    $query = "UPDATE user_registration SET fname='$fname',lname='$lname',address='$address',phone='$phone' ,user_image='$new_img_name' where email='" . $uname . "'";

    $data = mysqli_query($conn, $query);

    if ($data) {
      echo "<script>alert('Profile Updated')</script>";
    } else {
      echo "<script>alert('Something went wrong..!')</script>";
    }
  } else {
    //echo "Please Fill the Form";

    echo "<script>alert('Please fill all the Details')</script>";
  }
}
?>