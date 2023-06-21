<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UserRegistration</title>
  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Alkatra', cursive;
  }

  :root {
    scroll-behavior: auto !important;
  }
</style>

<body>
  <section class="h-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col">
          <div class="card card-registration my-4 shadow rounded-3" style="border: none;">
            <div class="row g-0">
              <div class="col-xl-5 d-none d-xl-block " style="overflow: hidden; ">
                <img src="../images/dabawale (1).jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; margin-top: 350px;" />
              </div>
              <div class="col-xl-7  " style="background-color: #DCF1FF; border-top-right-radius: 9px;border-bottom-right-radius: 9px;">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase" style="color: 4B49Ac;">Registration form</h3>

                  <form action="#" class="form-control" method="POST" enctype="multipart/form-data" style="background: none; border: none;">

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline ">
                          <label class="form-label fs-4" for="form3Example1m">First name</label>
                          <input type="text" name="fname" id="form3Example1m" pattern="[A-Za-z0-9]+" required class="form-control form-control-lg" />
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label fs-4" for="form3Example1n">Last name</label>
                          <input type="text" name="lname" id="form3Example1n" pattern="[A-Za-z0-9]+" required class="form-control form-control-lg" />
                        </div>
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label fs-4" for="form3Example8">Address</label>
                      <input type="text" name="address" id="form3Example8" pattern="[A-Za-z0-9]+" required class="form-control form-control-lg" />
                    </div>

                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                      <h6 class="mb-0 me-4 fs-4" style="color: #262626;">Gender: </h6>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male" />
                        <label class="form-check-label fs-4" for="maleGender">Male</label>
                      </div>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female" />
                        <label class="form-check-label fs-4" for="femaleGender">Female</label>
                      </div>


                      <div class="form-check form-check-inline mb-0">
                        <input class="form-check-input" type="radio" name="gender" id="otherGender" value="Other" />
                        <label class="form-check-label fs-4" for="otherGender">Other</label>
                      </div>

                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label fs-4" for="form3Example9">State</label>
                      <input type="text" name="state" id="form3Example9" required pattern="[A-Za-z0-9]+" class="form-control form-control-lg" />

                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label fs-4" for="form3Example9">City</label>
                      <input type="text" name="city" id="form3Example9" class="form-control form-control-lg" required pattern="[A-Za-z0-9]+" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label fs-4" for="form3Example90">Pincode</label>
                      <input type="number" name="pincode" required id="form3Example90" pattern="[0-9]{6}" maxlength="6" class="form-control form-control-lg" />

                    </div>

                    <div class="input_field">
                      <label class="form-label fs-4" for="form3Example99">Phone Number</label>
                      <input type="tel" pattern="[0-9]{10}" required name="phone" id="form3Example99" class="form-control form-control-lg">
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label fs-4" for="form3Example97">Email ID</label>
                      <input type="text" id="form3Example97" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form-control form-control-lg" />

                    </div>


                    <div class="form-outline mb-4">
                      <label class="form-label fs-4" for="form3Example97">Password</label>
                      <input type="password" name="password" id="form3Example97" class="form-control form-control-lg" minlength="4" maxlength="15" />

                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label fs-4" for="form3Example97">Confirm Password</label>
                      <input type="password" name="conpassword" id="form3Example97" class="form-control form-control-lg" minlength="4" maxlength="15" />

                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label fs-4" for="form3Example97">Upload Image</label>
                      <input type="file" name="uploadfile" id="form3Example97" class="form-control form-control-lg" required />

                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>


                    <div class="d-flex justify-content-end pt-3">
                      <input type="submit" class="btn shadow m-4" name="register" style="
                  border-radius: 50px;
                  height: 50px;
                  color: #262626;
                  font-size: 18px;
                  background-color: #9AC9DF;
                  width: 150px;
                  border: none !important;

                ">

                      </input>
                      <input type="reset" class="btn shadow m-4" style="
                  border-radius: 50px;
                  height: 50px;
                  color: #262626;
                  font-size: 18px;
                  background-color: #9AC9DF;
                  width: 150px;
                  border: none !important;

                ">

                      </input>
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


<?php
    



//error_reporting(0);
if (isset($_POST['register'])) {


  require('./database.php');
      
  $fname  = $_POST['fname'];
  $lname  = $_POST['lname'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $pincode = $_POST['pincode'];
  $phone  = $_POST['phone'];
  $email  = $_POST['email'];
  $pwd    = $_POST['password'];
  $cpwd   = $_POST['conpassword'];


  

     // function for email validation
     function is_valid_email($mail)
     {
          if (empty($mail)) {
              echo "<script>alert('Email is required.')</script>";
              return false;
          } else {
             
              // check if e-mail address is well-formed
              if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('Invalid email format.')</script>";
                return false;
          } 
          // now check if the mail is already registered
          
          require('./database.php');
          $email  = $_POST['email'];
          $slquery = "SELECT 1 FROM user_registration WHERE email = '$email'";
          $selectresult = mysqli_query($conn,$slquery);

          if(mysqli_num_rows($selectresult)>0) {
            echo "<script>alert('This email already exists.')</script>";
            return false;
          }
          // now returns the true- means you can proceed with this mail
          return true;
     }
    }
     // function for password verification
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

  $img_name = $_FILES["uploadfile"]["name"];
  $img_size = $_FILES["uploadfile"]['size'];
  $temp_name = $_FILES["uploadfile"]["tmp_name"];
  $error= $_FILES['uploadfile']['error'];

  
        $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
        $img_ex_lc=strtolower($img_ex);
        $allowed_exs=array("jpg","jpeg","png");

        if(in_array($img_ex_lc,$allowed_exs)){

          $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
          $img_upload_path='uploads/'.$new_img_name;
          move_uploaded_file($temp_name,$img_upload_path);
        }else{
          echo "<script>alert('Sorry , file type is not supported..!')</script>";
        }
    



  if (is_valid_email($email) && is_valid_passwords($pwd,$cpwd))
    {
      if ($fname != "" && $lname != "" && $address != "" && $gender != ""  && $state != "" && $city != "" && $pincode != ""  && $email != "" && $phone != "" &&  $pwd != "" && $cpwd != "") {

        $query = "INSERT INTO user_registration(user_image,fname,lname,address,gender,state,city,pincode,phone,email,password,cpassword)VALUES('$new_img_name','$fname','$lname','$address','$gender','$state','$city','$pincode','$phone','$email','$pwd','$cpwd')";
    
        $data = mysqli_query($conn, $query);
        echo "<script>alert('User Registered Successfully.')</script>";
     
        }else{
           echo "<script>alert('Sorry , Error Registering User!')</script>";
        }
    }


}

?>