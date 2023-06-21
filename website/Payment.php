<?php
  require('./database.php');
  $db= $conn;


if(isset($_POST['paymentid']) && isset($_POST['mobileno']) ){
    
    $payment_id = $_POST['paymentid'];
    $amt = $_POST['amt'];
    $mobile= $_POST['mobileno'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $lunchval = $_POST['lunch'];
    $dinnerval = $_POST['dinner'];
    $launchtime = $_POST['lunchtime'];
    $dinnertime = $_POST['dinnertime'];
    $cuval = $_POST['cuisine'];
    $dval = $_POST['duration'];
    $email = $_POST['email'];

    // echo $_POST['paymentid'];
    // echo $_POST['amt'];
    // echo $_POST['mobileno'];
    // echo $_POST['sdate'];
    // echo $_POST['edate'];
    // echo $_POST['lunch'];
    // echo $_POST['dinner'];
    // echo $_POST['lunchtime'];
    // echo $_POST['dinnertime'];
    // echo $_POST['cuisine'];
    // echo $_POST['duration'];
    // echo $_POST['email'];

    $sql = "INSERT INTO customer_details (mobileno,amount,startdate,enddate,lunch,dinner,lunchtime,dinnertime,cuisine,duration,paymentstatus,email) VALUES ('$mobile','$amt','$sdate','$edate','$lunchval','$dinnerval','$launchtime','$dinnertime','$cuval','$dval','$payment_id','$email')";
if(mysqli_query($db, $sql)){
        
        echo "Done";

} else{


  echo "NotDone";
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}    

  

?>
