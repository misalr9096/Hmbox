<?php
require('./database.php');

if (!$conn) {
  die("Connection Error");
}

$query = "select * from customer_details";
$result = mysqli_query($conn, $query);

if (isset($_POST['submit_button'])) {

  mysqli_query($conn, 'TRUNCATE TABLE `customer_details`');
  header("Location: " . $_SERVER['PHP_SELF']);
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="userdashboard.css">
  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <title>CustomerDetails</title>
</head>
<style>
  * {
    font-family: 'Alkatra', cursive;
  }
</style>

<body>
  <div class="container-fluid " style="height: 600px;">

    <h2 class="text-center fs-1" style="color: black;">Customer Details</h2>
    <div class="card shadow p-3 " style="border: none; background-color: #DCF1FF;">
      <div class="d-flex justify-content-end">

        <form method="post" action="" onsubmit="return confirm('Do you really want to clear all the Entries?');">
          <input name="submit_button" type="submit" class="btn shadow m-4" value="clear " style="
              border-radius: 50px;
              height: 50px;
              color: #262626;
              font-size: 18px;
              background-color: #9AC9DF;
              max-width: 150px;" />

        </form>
      </div>
      <div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl ">
      <table class="table table-striped m-1 ">
        <thead style="background-color: #9AC9DF;">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Mobile No</th>
            <th scope="col">Amount</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Lunch</th>
            <th scope="col">Dinner</th>
            <th scope="col">Lunch Time</th>
            <th scope="col">Dinner Time</th>
            <th scope="col">Cuisine</th>
            <th scope="col">Duration</th>
            <th scope="col">Payment Status</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>
          <tr>

          <tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <td><?php echo $row['id']   ?></td>
              <td><?php echo $row['mobileno']   ?></td>
              <td><?php echo $row['amount']   ?></td>
              <td><?php echo $row['startdate']   ?></td>
              <td><?php echo $row['enddate']   ?></td>
              <td><?php echo $row['lunch']   ?></td>
              <td><?php echo $row['dinner']   ?></td>
              <td><?php echo $row['lunchtime']   ?></td>
              <td><?php echo $row['dinnertime']   ?></td>
              <td><?php echo $row['cuisine']   ?></td>
              <td><?php echo $row['duration']   ?></td>
              <td><?php echo $row['paymentstatus']   ?></td>
              <td class="d-flex flex-column">

                <a href='UpdateCustomer.php?id=<?php echo $row['id'] ?>'><input class="  shadow  btn-success mb-3" type='submit' value='Update' style="
                                border-radius: 50px;
                                border: none;
                                height: 30px;
                                font-size: 18px;
                                width:90px;"></a>
               
               <a href='DeleteCustomer.php?id=<?php echo $row['id'] ?>'><input type='submit' value='Delete' class=' btn-danger shadow ' onClick='return checkdelete()' style="
                                    border-radius: 50px;
                                    border:none;
                                    height: 30px;
                                    font-size: 18px;  
                                    width:90px;"></a>
              </td>
          </tr>
        <?php
            }

        ?>
        </tr>

        </tbody>
      </table>
      </div>
    </div>
  </div>
  <script>
      function checkdelete() {
        return confirm('Are You Sure You Want To Delete This Record ?');
    }
  </script>
</body>

</html>