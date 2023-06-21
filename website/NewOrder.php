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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Css/index.css">
  <link rel="stylesheet" href="/Js/index.js">
  <link
    href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <title>New Order</title>

</head>
<style>
  .header {
    font-size: 20vh;
    letter-spacing: 10px;
    color: #ffff;
    text-shadow: 0 0 5px red, 0 0 10px red, 0 0 20px red, 0 0 30px red, 0 0 40px red, 0 0 55px red, 0 0 75px red;
    text-align: center;
    animation: text-flicker 1s linear infinite;
  }

  @keyframes text-flicker {
    0% {
      opacity: 0.1;
    }

    1% {
      opacity: 0.9;
    }

    5% {
      opacity: 1;
    }

    7% {
      opacity: 0.5;
    }

    15% {
      opacity: 1;
    }

    16% {
      opacity: 0.3;
    }

    20% {
      opacity: 0.9;
    }

    22% {
      opacity: 0.7;
    }

    30% {
      opacity: 1;
    }

    35% {
      opacity: 1;
    }

    50% {
      opacity: 0.4;
    }

    60% {
      opacity: 1;
    }

    64% {
      opacity: 1;
    }

    70% {
      opacity: 0.2;
    }

    85% {
      opacity: 0.1;
    }

    100% {
      opacity: 1;
    }
  }

  .font {
    font-family: 'Kalam';
  }
</style>

<body>

  <div class="container-fluid">
    <form class="card shadow p-3" style="border: none; background-color: #dcf1ff">
      <label class="form-label text-center fs-4  header ">10 % discount</label>
      <div class="container px-4">
        <div class="row gx-5">
          <div class="col">
            <label class="form-label fs-4 text-center" style="color: #262626">Mobile No</label>

            <input type="tel" required name="" class="form-control" id="mobileno" style="border: none;">

            <label class="form-label fs-4 text-center" style="color: #262626">Start Date:</label>

            <input type="date" required name="" class="form-control " id="datepicker" pattern="\d{1,2}/\d{1,2}/\d{4}" value="" style="border: none;">

            <label class="form-label fs-4 text-center" style="color: #262626">Lunch</label>
            <select id="lunch" required class="form-control " style="border: none">

              <option selected>Yes</option>
              <option>No</option>
            </select>

            <label class="form-label fs-4 text-center" style="color: #262626">Lunch Time
            </label>
            <select id="launchtime" required class="form-control " style="border: none">
              <option selected>12:00 pm to 01:00 pm</option>
              <option>01:00 pm to 02:00 pm</option>
              <option>03:00 pm to 04:00 pm</option>
            </select>

            <label class="form-label fs-4 text-center" style="color: #262626">Dinner</label>

            <select id="dinner" required class="form-control" style="border: none">
              <option selected>Yes</option>
              <option>No</option>

            </select>

            <label class="form-label fs-4 text-center" style="color: #262626">Dinner Time
            </label>
            <select id="dinnertime" required class="form-control " style="border: none">
              <option selected>6:30 pm to 07:30 pm</option>
              <option>07:30 pm to 08:30 pm</option>
              <option>08:30 pm to 09:30 pm</option>
              <option>09:30 pm to 10:30 pm</option>
              <option>10:30 pm to 11:30 pm</option>
              <option>11:30 pm to 12:30 pm</option>
            </select>
          </div>
          <div class="col">
            <label class="form-label fs-4" for="form3Example97">Email ID</label>
            <input type="text" id="email" name="email" disabled class="form-control" value="<?php echo $result['email'] ?>" />


            <label class="form-label fs-4 text-center" style="color: #262626">Choose Option
            </label>
            <select id="duration" required class="form-control 3" style="border: none">
              <option>Trial</option>
              <option>Week</option>
              <option>Month</option>
            </select>
            <label class="form-label fs-4 text-center" style="color: #262626">Choose Cuisine
            </label>

            <select id="cuisine" required class="form-control " style="border: none">
              <option>South Indian Cuisine</option>
              <option>Maharashtra Cuisine</option>
              <option>Jain Cuisine</option>
              <option>Gujarati Cuisine</option>
            </select>


            <div class="d-flex align-content-center justify-content-center">
              <button type="button" class="btn shadow m-4" onclick="check()" style="
                        border-radius: 50px;
                        height: 50px;
                        color: #262626;
                        font-size: 18px;
                        background-color: #9AC9DF;
                        width: 150px;
                        border: none !important;
                      
                      ">
                Make Bill
              </button>

              <button type="button" id="pay" class="btn shadow m-4" onclick="pay_now(event)" style="
                  border-radius: 50px;
                  height: 50px;
                  color: #262626;
                  font-size: 18px;
                  background-color: #9AC9DF;
                  width: 150px;
                  border: none !important;

                ">
                Pay
              </button>
            </div>
          </div>
        </div>
      </div>

         <div class="col-sm-12 col-lg-5 col-xl-5 col-md-12 m-4 ">

        <div class="card shadow rounded-3 " style="border: none; background-color: #9AC9DF;">

          <table class="table table-borderless  table-responsive-md table-responsive-sm table-responsive-lg ">
            <thead>
              <h3 class="card-title m-3 text-center">Invoice</h3>
            </thead>
            <tbody>
              <tr>
                <th>
                  <h5 class="card-text m-1 font fs-5">StartDate</h5>
                </th>
                <td><span id="start" class="font fs-5"></span></td>
              </tr>
              <tr>
                <th>
                  <h5 class="card-text m-1 font fs-5">EndDate</h5>
                </th>
                <td><span id="enddate" class="font fs-5"></span></td>
              </tr>
              <tr>
                <th>
                  <h5 class="card-text m-1 font fs-5">Lunch</h5>
                </th>
                <td><span id="lunch1" class="font fs-5"></span></td>
              </tr>
              <tr>
                <th>
                  <h5 class="card-text m-1 font fs-5">Dinner</h5>
                </th>
                <td><span id="dinner1" class="font fs-5"></span></td>
              </tr>
              <tr>
                <th>
                  <h5 class="card-text m-1 font fs-5">Tiffin Price</h5>
                </th>
                <td><span id="tiffinprice" class="font fs-5"></span></td>
              </tr>
              <tr>
                <th>
                  <h5 class="card-text m-1 font fs-5">Total Delivery Cost</h5>
                </th>
                <td><span id="dprice" class="font fs-5"></span></td>
              </tr>
              <tr>
                <th>
                  <h5 class="card-text m-1 font fs-5">Discount</h5>
                </th>
                <td><span id="discount" class="font fs-5"></span></td>
              </tr>
              <tr>
                <th>
                  <h5 class="card-text m-1 font fs-5">Total</h5>
                </th>
                <td><span id="total" class="font fs-5"></span></td>
              </tr>
            </tbody>
          </table>

        </div>


      </div>
      </div>
  </div>
  <script>

    let startdate = document.getElementById("datepicker");
    let dinner = document.getElementById("dinner");
    let dinnertime = document.getElementById("dinnertime");
    let lunch = document.getElementById("lunch");
    let launchtime = document.getElementById("launchtime");
    let duration = document.getElementById("duration");
    let cuisine = document.getElementById("cuisine");
    let number = document.getElementById("mobileno");


    let dvalue = duration.options[duration.selectedIndex].text;
    let cvalue = cuisine.options[cuisine.selectedIndex].text;
    let dinnertext = dinner.options[dinner.selectedIndex].text;
    let dinnertimetext = dinnertime.options[dinnertime.selectedIndex].text;
    let lunchtext = lunch.options[lunch.selectedIndex].text;
    let launchtimetext = launchtime.options[launchtime.selectedIndex].text;


    let edate = document.getElementById('enddate');
    let tiffinep = document.getElementById('tiffinprice');
    let dprice = document.getElementById('dprice');
    let discount = document.getElementById('discount');
    let price = document.getElementById('total');


    function calculateforDays(tp, dis, lvalue, dvalue, di) {

      if ((lvalue.localeCompare("Yes") === 0 && dvalue.localeCompare("Yes") === 0) == true) {
        discount.innerText = (((tp * 2) + di) * 1 / dis);
        price.innerText = (((tp * 2) + di) - (((tp * 2) + di) * 1 / dis));

      }
      else if ((lunch.value.localeCompare("No") === 0 && dinner.value.localeCompare("Yes") === 0) == true) {
        discount.innerText = (((tp) + di) * 1 / 10);
        price.innerText = (((tp) + di) - (((tp) + di) * 1 / dis));
      }
      else if ((lunch.value.localeCompare("Yes") === 0 && dinner.value.localeCompare("No") === 0) == true) {
        discount.innerText = (((tp) + di) * 1 / 10);
        price.innerText = (((tp) + di) - (((tp) + di) * 1 / dis));
      } else {
        alert("Choose At least One time meal...!");
        document.getElementById("pay").style.display = "None";
      }
    }

    function calculateforMonth(tp, dis, lvalue, dvalue, di) {


      if ((lvalue.localeCompare("Yes") === 0 && dvalue.localeCompare("Yes") === 0) == true) {

        discount.innerText = ((((tp * 30) * 2) + di) * 1 / dis);
        price.innerText = ((((tp * 30) * 2) + di) - ((((tp * 30) * 2) + di) * 1 / dis));

      }
      else if ((lunch.value.localeCompare("No") === 0 && dinner.value.localeCompare("Yes") === 0) == true) {

        discount.innerText = (((tp * 30) + di) * 1 / 10);
        price.innerText = (((tp * 30) + di) - (((tp * 30) + di) * 1 / dis));
      }
      else if ((lunch.value.localeCompare("Yes") === 0 && dinner.value.localeCompare("No") === 0) == true) {

        discount.innerText = (((tp * 30) + di) * 1 / 10);
        price.innerText = (((tp * 30) + di) - (((tp * 30) + di) * 1 / dis));
      } else {
        alert("Choose At least One time meal...!");
        document.getElementById("pay").style.display = "None";
      }
    }



    function calculateforWeek(tp, dis, lvalue, dvalue, di) {


      if ((lvalue.localeCompare("Yes") === 0 && dvalue.localeCompare("Yes") === 0) == true) {
        discount.innerText = ((((tp * 7) * 2) + di) * 1 / dis);
        price.innerText = ((((tp * 7) * 2) + di) - ((((tp * 7) * 2) + 10) * 1 / dis));

      }
      else if ((lunch.value.localeCompare("No") === 0 && dinner.value.localeCompare("Yes") === 0) == true) {
        discount.innerText = (((tp * 7) + di) * 1 / 10);
        price.innerText = (((tp * 7) + di) - (((tp * 7) + 10) * 1 / dis));
      }
      else if ((lunch.value.localeCompare("Yes") === 0 && dinner.value.localeCompare("No") === 0) == true) {
        discount.innerText = (((tp * 7) + di) * 1 / 10);
        price.innerText = (((tp * 7) + di) - (((tp * 7) + 10) * 1 / dis));
      } else {
        alert("Choose At least One time meal...!");
        document.getElementById("pay").style.display = "None";
      }
    }

    var enddate;

    function validatePhoneNumber(input) {
      var regex = /^[789][0-9]{9}$/;
      return regex.test(input);


    }


    function check() {

      validatePhoneNumber(number.value);
      if (validatePhoneNumber(number.value) === false) {
        alert("Invalid MobileNumber ..!")
      }
      else if (number.value != "" && startdate.value != "") {

        var datestring = startdate.valueAsDate.getDate() + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
        document.getElementById('lunch1').innerText = lunch.value;
        document.getElementById('dinner1').innerText = dinner.value;
        document.getElementById('start').innerText = datestring;
        document.getElementById("pay").style.display = "block";


        //for trial--------------------------------------------
        if ((duration.value.localeCompare("Trial") === 0 && cuisine.value.localeCompare("South Indian Cuisine") === 0) == true) {

          enddate = startdate.valueAsDate.getDate() + 1 + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
          edate.innerText = enddate;
          tiffinep.innerText = "60 " + "Rs";
          dprice.innerText = "1 " + "Rs";

          calculateforDays(60, 10, lunch.value, dinner.value, 1);
        }
        else if ((duration.value.localeCompare("Trial") === 0 && cuisine.value.localeCompare("Maharashtra Cuisine") === 0) == true) {

          enddate = startdate.valueAsDate.getDate() + 1 + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
          edate.innerText = enddate;
          tiffinep.innerText = "70 " + "Rs";
          dprice.innerText = "1 " + "Rs";

          calculateforDays(70, 10, lunch.value, dinner.value, 1);

        }
        else if ((duration.value.localeCompare("Trial") === 0 && cuisine.value.localeCompare("Jain Cuisine") === 0) == true) {

          enddate = startdate.valueAsDate.getDate() + 1 + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
          edate.innerText = enddate;
          tiffinep.innerText = "60 " + "Rs";
          dprice.innerText = "10" + "Rs";

          calculateforDays(60, 10, lunch.value, dinner.value, 1);

        }
        else if ((duration.value.localeCompare("Trial") === 0 && cuisine.value.localeCompare("Gujarati Cuisine") === 0) == true) {

          enddate = startdate.valueAsDate.getDate() + 1 + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
          edate.innerText = enddate;
          tiffinep.innerText = "70 " + "Rs";
          dprice.innerText = "10" + "Rs";

          calculateforDays(70, 10, lunch.value, dinner.value, 1);

        }
        // for week-------------------------------------------------

        if ((duration.value.localeCompare("Week") === 0 && cuisine.value.localeCompare("South Indian Cuisine") === 0) == true) {


          if(startdate.valueAsDate.getDate() == 24 ){
            enddate =" 01 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 25 ){
            enddate =" 02 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 26 ){
            enddate =" 03 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 27 ){
            enddate =" 04 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 28 ){
            enddate =" 05 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 29 ){
            enddate =" 06 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 30 ){
            enddate =" 07 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 31 ){
            enddate =" 07 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else{
            enddate = startdate.valueAsDate.getDate() + 7 + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
          }
         
          edate.innerText = enddate;
          tiffinep.innerText = "60 " + "Rs";
          dprice.innerText = "7 " + "Rs";

          calculateforWeek(60, 10, lunch.value, dinner.value, 7);
        }
        else if ((duration.value.localeCompare("Week") === 0 && cuisine.value.localeCompare("Maharashtra Cuisine") === 0) == true) {

          if(startdate.valueAsDate.getDate() == 24 ){
            enddate =" 01 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 25 ){
            enddate =" 02 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 26 ){
            enddate =" 03 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 27 ){
            enddate =" 04 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 28 ){
            enddate =" 05 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 29 ){
            enddate =" 05 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 30 ){
            enddate =" 07 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 31 ){
            enddate =" 07 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else{
            enddate = startdate.valueAsDate.getDate() + 7 + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
          }
         
          edate.innerText = enddate;
          tiffinep.innerText = "70 " + "Rs";
          dprice.innerText = "7 " + "Rs";

          calculateforWeek(70, 10, lunch.value, dinner.value, 7);

        }
        else if ((duration.value.localeCompare("Week") === 0 && cuisine.value.localeCompare("Jain Cuisine") === 0) == true) {

          if(startdate.valueAsDate.getDate() == 24 ){
            enddate =" 01 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 25 ){
            enddate =" 02 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 26 ){
            enddate =" 03 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 27 ){
            enddate =" 04 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 28 ){
            enddate =" 05 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 29 ){
            enddate =" 05 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 30 ){
            enddate =" 07 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 31 ){
            enddate =" 07 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else{
            enddate = startdate.valueAsDate.getDate() + 7 + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
          }
         
          edate.innerText = enddate;
          tiffinep.innerText = "60 " + "Rs";
          dprice.innerText = "7 " + "Rs";

          calculateforWeek(60, 10, lunch.value, dinner.value, 7);

        }
        else if ((duration.value.localeCompare("Week") === 0 && cuisine.value.localeCompare("Gujarati Cuisine") === 0) == true) {

          if(startdate.valueAsDate.getDate() == 24 ){
            enddate =" 01 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 25 ){
            enddate =" 02 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 26 ){
            enddate =" 03 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 27 ){
            enddate =" 04 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 28 ){
            enddate =" 05 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 29 ){
            enddate =" 05 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 30 ){
            enddate =" 07 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else if(startdate.valueAsDate.getDate() == 31 ){
            enddate =" 07 "+"-" + ( (startdate.valueAsDate.getMonth() + 1)+ 1 )+ "-" + startdate.valueAsDate.getFullYear();
          }
          else{
            enddate = startdate.valueAsDate.getDate() + 7 + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
          }
         
          edate.innerText = enddate;
          tiffinep.innerText = "70 " + "Rs";
          dprice.innerText = "7 " + "Rs";

          calculateforWeek(70, 10, lunch.value, dinner.value, 7);

        }


        // for month-------------------------------------------------

        if ((duration.value.localeCompare("Month") === 0 && cuisine.value.localeCompare("South Indian Cuisine") === 0) == true) {

          enddate = startdate.valueAsDate.getDate() + "-" + ((startdate.valueAsDate.getMonth() + 1) + 1) + "-" + startdate.valueAsDate.getFullYear();
          edate.innerText = enddate;
          tiffinep.innerText = "60 " + "Rs";
          dprice.innerText = "30 " + "Rs";

          calculateforMonth(60, 10, lunch.value, dinner.value, 30);
        }
        else if ((duration.value.localeCompare("Month") === 0 && cuisine.value.localeCompare("Maharashtra Cuisine") === 0) == true) {

          enddate = startdate.valueAsDate.getDate() + 1 + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
          edate.innerText = enddate;
          tiffinep.innerText = "70 " + "Rs";
          dprice.innerText = "30 " + "Rs";

          calculateforMonth(70, 10, lunch.value, dinner.value, 30);

        }
        else if ((duration.value.localeCompare("Month") === 0 && cuisine.value.localeCompare("Jain Cuisine") === 0) == true) {

          enddate = startdate.valueAsDate.getDate() + 1 + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
          edate.innerText = enddate;
          tiffinep.innerText = "60 " + "Rs";
          dprice.innerText = "30 " + "Rs";

          calculateforMonth(60, 10, lunch.value, dinner.value, 30);

        }
        else if ((duration.value.localeCompare("Month") === 0 && cuisine.value.localeCompare("Gujarati Cuisine") === 0) == true) {

          enddate = startdate.valueAsDate.getDate() + 1 + "-" + (startdate.valueAsDate.getMonth() + 1) + "-" + startdate.valueAsDate.getFullYear();
          edate.innerText = enddate;
          tiffinep.innerText = "70 " + "Rs";
          dprice.innerText = "30 " + "Rs";

          calculateforMonth(70, 10, lunch.value, dinner.value, 30);

        }
      }
      else {
        alert("Please fill all details...!")
      }
    }




    function pay_now(e) {


      var amt = jQuery('#total').text();


      var options = {
        "key": "rzp_test_lkLGtJLUuyIIMc",
        "amount": amt * 100,
        "currency": "INR",
        "name": "HmBox Tiffin Service",
        "description": "Test Transaction",
        "image": "../images/black-logo (2).png",
        "Theme Color": "#DCF1FF",
        "handler": function (response) {

          confirmpayment(response);

        }
      };

      var rzp1 = new Razorpay(options);
      rzp1.open();
      e.preventDefault();
    }




    function confirmpayment(response) {

      var mobileno = jQuery('#mobileno').val();
      var amt = jQuery('#total').text();
      var sdate = jQuery('#start').text();
      var edate = jQuery('#enddate').text();
      var lunchval = jQuery('#lunch').find(":selected").val();
      var dinnerval = jQuery('#dinner').find(":selected").val();
      var launchtime = jQuery('#launchtime').find(":selected").val();
      var dinnertime = jQuery('#dinnertime').find(":selected").val();
      var cuval = jQuery('#cuisine').find(":selected").val();
      var dval = jQuery('#duration').find(":selected").val();
      var email = jQuery("#email").val();

      jQuery.ajax({
        url: 'Payment.php',
        type: 'POST',
        data: {
          'amt': amt,
          'mobileno': mobileno,
          'sdate': sdate,
          'edate': edate,
          'lunch': lunchval,
          'dinner': dinnerval,
          'lunchtime': launchtime,
          'dinnertime': dinnertime,
          'cuisine': cuval,
          'duration': dval,
          'paymentid': response.razorpay_payment_id,
          'email': email
        },
        success: function (result) {
          if (result == "Done") {
            alert("Payment Done Successfully..!")
          } else {
            alert("Your order is alredy going on..!");
          }
        },

      });

    }




  </script>

</body>

</html>