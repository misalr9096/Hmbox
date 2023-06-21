<?php

require('./database.php');

function generateNumericOTP($n) {
      
    // Take a generator string which consist of
    // all numeric digits
    $generator = "1357902468";
  
    // Iterate for n-times and pick a single character
    // from generator and append it to $result
      
    // Login for generating a random character from generator
    //     ---generate a random number
    //     ---take modulus of same with length of generator (say i)
    //     ---append the character at place (i) from generator to result
  
    $result = "";
  
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }
  
    // Return result
    return $result;
}

if (isset($_POST['submit'])) {

   $email = $_POST['email'];

    $emailquery = "select * from user_registration where email= '$email'";

    $query = mysqli_query($conn, $emailquery);

    // $emailcount = mysqli_num_rows($query);


    if ($query != "" || mysqli_num_rows($query) == 1) {

 
        $otp = generateNumericOTP(6); 

        // $data = "INSERT INTO user_registration (otp) VALUES ('$otp') WHERE email= '$email' ";
       
        $data = "update user_registration set otp='$otp 'WHERE email= '$email' ";
     
        $sql = mysqli_query($conn, $data);
        
                  // declare variable
        $headers = "Reply-To: The Sender<hmboxweb2023@gmail.com>\r\n";
        
          // add more info
        $headers .= "Return-Path: The Sender<hmboxweb2023@gmail.com>\r\n"; 
        $headers .= "From: The hmbox<hmboxweb2023@gmail.com>\r\n";  
        $headers .= "Organization: Sender Organization\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
  
            $to = $email;
            
            $subject = "Reset Passward";
            $message="Your password reset code   ".$otp." "; 
            if ( mail($to,$subject,$message,$headers) ) {
    
               header("Location:  ./UserVerify.php");
    
    
            } else {
                 echo (" <script>alert('Something went wrong..!');</script>");
               
            }  
    
       
   }
     else {


        echo "<script>alert('Mail not Found..!');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForgetPassword</title>
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
    <div class="container py-5  d-flex justify-content-center align-items-center">

        <div class="row d-flex justify-content-center align-items-center w-75">
            <div class="col">
                <div class="card card-registration my-4 shadow rounded-3 p-5 d-flex justify-content-center align-items-center" style="border: none; background-color: #DCF1FF;">

                    <form class="w-50 d-flex align-items-center justify-content-center flex-column" method="post" action="">

                        <div class="form-group ">
                            <label for="exampleInputEmail1" class="fs-5">Email address</label>
                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter email">
                        </div>


                        <button type="submit" class="btn mt-4 shadow" name="submit" style="
                 
                    color: #262626;
                    font-size: 18px;
                    background-color: #9AC9DF;
                    ">Reset Password</button>
                        <p class="card-text text-center mt-3" style="font-Size:15px;font-family: 'Kalam';">
                            Kindly check your mail to reset password link
                        </p>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2" style="color: #262626;">Already have an account?</p>
                            <a href="./UserLogin.php"><button type="button" class="btn btn-outline-danger">Login</button></a>
                        </div>


                    </form>

                </div>
            </div>
        </div>

</body>

</html>