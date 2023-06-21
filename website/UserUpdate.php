<?php
require('./database.php');
$id = $_GET['id'];

$query = "SELECT * FROM user_registration WHERE id='$id'"; //Query for fetching the data form the table
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details

    </title>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="userdashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
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
                                    <h3 class="mb-5 text-uppercase" style="color: 4B49Ac;">Upadate Details</h3>

                                    <form action="#" class="form-control" method="POST" enctype="multipart/form-data" style="background: none; border: none;">

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline ">
                                                    <label class="form-label fs-4" for="form3Example1m">First name</label>
                                                    <input type="text" name="fname" id="form3Example1m" pattern="[A-Za-z0-9]+" required class="form-control form-control-lg" value="<?php echo $result['fname'] ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label fs-4" for="form3Example1n">Last name</label>
                                                    <input type="text" name="lname" id="form3Example1n" pattern="[A-Za-z0-9]+" required class="form-control form-control-lg" value="<?php echo $result['lname'] ?>" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label fs-4" for="form3Example8">Address</label>
                                            <input type="text" name="address" id="form3Example8" pattern="[A-Za-z0-9]+" required class="form-control form-control-lg" value="<?php echo $result['address'] ?>" />
                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4 fs-4" style="color: #262626;">Gender: </h6>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male" value="<?php echo $result['gender'] ?>" />
                                                <label class="form-check-label fs-4" for="maleGender">Male</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female" value="<?php echo $result['gender'] ?>" />
                                                <label class="form-check-label fs-4" for="femaleGender">Female</label>
                                            </div>


                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="radio" name="gender" id="otherGender" value="Other" value="<?php echo $result['gender'] ?>" />
                                                <label class="form-check-label fs-4" for="otherGender">Other</label>
                                            </div>

                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label fs-4" for="form3Example9">State</label>
                                            <input type="text" name="state" id="form3Example9" required pattern="[A-Za-z0-9]+" class="form-control form-control-lg" value="<?php echo $result['state'] ?>" />

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label fs-4" for="form3Example9">City</label>
                                            <input type="text" name="city" id="form3Example9" class="form-control form-control-lg" required pattern="[A-Za-z0-9]+" value="<?php echo $result['city'] ?>" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label fs-4" for="form3Example90">Pincode</label>
                                            <input type="number" name="pincode" required id="form3Example90" class="form-control form-control-lg" value="<?php echo $result['pincode'] ?>" />

                                        </div>

                                        <div class="input_field">
                                            <label class="form-label fs-4" for="form3Example99">Phone Number</label>
                                            <input type="tel" pattern="[0-9]{10}" required name="phone" id="form3Example99" class="form-control form-control-lg" value="<?php echo $result['phone'] ?>">
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label fs-4" for="form3Example97">Email ID</label>
                                            <input type="text" id="form3Example97" name="email" class="form-control form-control-lg" value="<?php echo $result['email'] ?>" />

                                        </div>


                                        <div class="d-flex justify-content-end pt-3">
                                            <input type="reset" class="btn btn-lg shadow rounded-3" style="background-color: #9AC9DF;color: #262626;" value="Reset all"></input>
                                            <input type="submit" class="btn btn-lg ms-2 shadow rounded-3" style="background-color: #9AC9DF;color: #262626;" name="update" value="Update"> </input>
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
if (isset($_POST['update'])) {
    $fname  = $_POST['fname'];
    $lname  = $_POST['lname'];
    $address    = $_POST['address'];
    $gender    = $_POST['gender'];
    $state    = $_POST['state'];
    $city    = $_POST['city'];
    $pincode    = $_POST['pincode'];
    $phone  = $_POST['phone'];
    $email  = $_POST['email'];
    // $pwd    = $_POST['password'];
    // $cpwd   = $_POST['conpassword'];

    if ($fname != "" && $lname != "" && $address != "" && $gender != ""  && $state != "" && $city != "" && $pincode != ""  && $email != "" && $phone != "" ) {
        //For Updation
        $query = "UPDATE user_registration SET fname='$fname',lname='$lname',address='$address',gender='$gender',state='$state',city='$city',pincode='$pincode',phone='$phone',email='$email' WHERE id='$id'";

        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<script>alert('User Updated..!')</script>";


?>
            <meta http-equiv="refresh" content="0; url = https://hmbox2023.000webhostapp.com/AdminDashboard.php" />

<?php
        } else {
            echo "<script>alert('User Not updated..!')</script>";
        }
    } else {
        //echo "Please Fill the Form";

        echo "<script>alert('Please fill all the Details')</script>";
    }
}


?>