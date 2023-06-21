<?php 
  require('./database.php');
$id = $_GET['id'];

$query = "SELECT * FROM customer_details WHERE id='$id'"; //Query for fetching the data form the table
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
    <link rel="stylesheet" href="../Css/index.css">
    <link rel="stylesheet" href="/Js/index.js">
    <link
        href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <title>UpdateCustomer</title>
</head>

<body>
    <div class="container-fluid">
        <form class="card shadow p-3 mt-5"  style="border: none; background-color: #dcf1ff"  action="#" class="form-control" method="POST" enctype="multipart/form-data" style="background: none;">
            <div class="row">
                <div class="col-6">

                    <label class="form-label fs-4 text-center" style="color: #262626">Mobile No</label>

                    <input type="tel" required class="form-control" id="mobileno" name="mobileno" style="border: none;" value="<?php echo $result['mobileno'] ?>">

                    <label class="form-label fs-4 text-center" style="color: #262626">Start Date:</label>

                    <input  required class="form-control" name="sdate" style="border: none"value="<?php echo $result['startdate'] ?>">

                    <label class="form-label fs-4 text-center" style="color: #262626">Lunch</label>
                    <input id="lunch" name="lunch" required class="form-control " style="border: none" value="<?php echo $result['lunch'] ?>">

                    </input>

                    <label class="form-label fs-4 text-center" style="color: #262626">Lunch Time
                    </label>
                    <input id="launchtime" required class="form-control "  name="lunchtime" style="border: none" value="<?php echo $result['lunchtime'] ?>">

                    </input>

                    <label class="form-label fs-4 text-center" style="color: #262626">Dinner</label>

                    <input id="dinner" name="dinner" required class="form-control" style="border: none" value="<?php echo $result['dinner'] ?>">


                    </input>

                    <label class="form-label fs-4 text-center" style="color: #262626">Dinner Time
                    </label>
                    <input id="dinnertime" required class="form-control " name="dinnertime" style="border: none" value="<?php echo $result['dinnertime'] ?>">

                    </input>
                </div>

                <div class="col-6">
                    <label class="form-label fs-4 text-center" style="color: #262626">Duration
                    </label>
                    <input id="duration" required class="form-control 3" name="duration" style="border: none" value="<?php echo $result['duration'] ?>">

                    </input>
                    <label class="form-label fs-4 text-center" style="color: #262626">Choose Cuisine
                    </label>

                    <input id="cuisine" name="cuisine" required class="form-control " style="border: none" value="<?php echo $result['cuisine'] ?>">

                    </input>

                    <label class="form-label fs-4 text-center" style="color: #262626">End Date
                    </label>

                    <input id="enddate" required class="form-control " style="border: none" name="edate" value="<?php echo $result['enddate'] ?>">

                    </input>

                    <label class="form-label fs-4 text-center" style="color: #262626">Amount
                    </label>

                    <input id="enddate" required class="form-control" name="amt" style="border: none" value="<?php echo $result['amount'] ?>">

                    </input>
                    </input>
                    <label class="form-label fs-4 text-center" style="color: #262626" >PaymentStatus
                    </label>

                    <input id="enddate" required class="form-control disabled" name="paymentid" style="border: none" value="<?php echo $result['paymentstatus'] ?>">

                    </input>

                </div>
            </div>
                    <div class="d-flex align-content-center justify-content-center">
                        <input type="submit" class="btn shadow m-4" name="update" value="Update" style="
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
</body>

</html>
<?php

if (isset($_POST['update'])) {

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

    



    if ($amt != "" && $mobile != "" && $sdate != "" && $edate != ""  && $lunchval != "" && $dinnerval != "" && $launchtime != ""  && $cuval != "" && $dval != "" ) {
        //For Updation
        $query = "UPDATE customer_details SET paymentstatus='$payment_id',amount='$amt',mobileno='$mobile',startdate='$sdate',enddate='$edate',lunch='$lunchval',dinner='$dinnerval',lunchtime='$launchtime',dinnertime='$dinnertime',cuisine='$cuval',duration='$dval' WHERE id='$id'";

        $data = mysqli_query($conn, $query);
              

        if ($data) {
            echo "<script>alert('Record Updated')</script>";

                      
?>
            <meta http-equiv="refresh" content="0; url = ./CustomberDetails.php" />

<?php
        } else {
             error_reporting( E_ALL ); 
            echo "<script>alert('Record Not Updated')</script>";
         
        }
    } else {
        //echo "Please Fill the Form";

        echo "<script>alert('Please Fill the Form')</script>";
    }
}