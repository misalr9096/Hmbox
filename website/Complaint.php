<?php
require('./database.php');

if (!$conn) {
  die("Connection Error");
}
$query = "select * from user_complaints";
$result = mysqli_query($conn, $query);

if (isset($_POST['submit_button'])) {

  mysqli_query($conn, 'TRUNCATE TABLE `user_complaints`');
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
  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>


  <title>Complaint</title>
</head>
<style>
  * {
    font-family: 'Alkatra', cursive;
  }
</style>

<body>
  <div class="container-fluid " style="height: 600px;">

    <h2 class="text-center fs-1" style="color: black;">Complaint Details</h2>
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
      <table class="table table-striped m-1">
        <thead style="background-color: #9AC9DF;">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile No</th>
            <th scope="col">Subject</th>
            <th scope="col">Complaint</th>

          </tr>
        </thead>
        <tbody>
          <tr>

          <tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <td><?php echo $row['id']   ?></td>
              <td><?php echo $row['name']   ?></td>
              <td><?php echo $row['mobileno']   ?></td>
              <td><?php echo $row['subject']   ?></td>
              <td><?php echo $row['complaint']   ?></td>


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
</body>

</html>