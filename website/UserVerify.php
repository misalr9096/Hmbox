<?php
require('./database.php');


if (isset($_POST['submit'])) {

    $otp = $_POST['otp'];
    

     
        $otpquery = "select otp from user_registration where otp= '$otp'";

        $query = mysqli_query($conn, $otpquery);
        $result = mysqli_fetch_assoc($query);
        
        // echo $query;

        if($result){
            header("Location:./UserPasswardReset.php");
        }
        else{
            echo "<script>alert('check your otp again..!')</script>";
        }

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
    <link rel="stylesheet" href="userdashboard.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
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
    <div class="container py-5  d-flex justify-content-center align-items-center">

        <div class="row d-flex justify-content-center align-items-center w-75">
            <div class="col">
                <div class="card card-registration my-4 shadow rounded-3 p-5 d-flex justify-content-center align-items-center" style="border: none; background-color: #DCF1FF;">

                    <form class="w-50 d-flex align-items-center justify-content-center flex-column" method="post" action="">
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1" class="fs-5">Enter otp</label>
                            <input type="password" class="form-control form-control-lg" id="exampleInputEmail1" name="otp" aria-describedby="emailHelp" required placeholder="Enter Otp">
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