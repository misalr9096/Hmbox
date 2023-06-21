<?php
require('./database.php');
error_reporting(0);

$query = "SELECT * FROM user_registration "; //Query for fetching the data form the table
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


if (isset($_POST['submit_button'])) {

    mysqli_query($conn, 'TRUNCATE TABLE `user_registration`');
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
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <title>User Details</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: 'Alkatra', cursive;
    }
</style>

</head>

<body>

    <div class="container-fluid " style="height: 600px;">


        <div class="card shadow p-3 mt-2" style="border: none; background-color: #DCF1FF;">
            <h2 class="text-center fs-1 m-1" style="color: black;">Registration Details</h2>
            <div class="d-flex justify-content-end">

                <form method="post" action="" onsubmit="return confirm('Do you really want to delete all the records?');">
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
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Email</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Pincode</th>
                            <th scope="col">Address</th>
                            <th scope="col">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        <tr>
                            <?php
                            while ($result = mysqli_fetch_assoc($data)) {
                                $image = $result["user_image"];
                            ?>
                                <td><?php echo $result["id"] ?></td>
                                <td><img src="./uploads/<?= $result['user_image'] ?>" height='80px' width='80px'></td>
                                <td><?php echo $result["fname"] ?></td>
                                <td><?php echo $result["lname"] ?></td>
                                <td><?php echo $result["gender"] ?></td>
                                <td><a href='tel: phone'><?php echo $result["phone"] ?></a></td>
                                <td><a href='mailto: email'><?php echo $result["email"] ?></a></td>
                                <td><?php echo $result["city"] ?></td>
                                <td><?php echo $result["state"] ?></td>
                                <td><?php echo $result["pincode"] ?></td>
                                <td><?php echo $result["address"] ?></td>
                                <td class="d-flex flex-column ">
                                    <a href='./UserUpdate.php?id=<?php echo $result['id'] ?>' target="_blank"><input class="  shadow  btn-success mb-3" type='submit' value='Update' style="
                                    border-radius: 50px;
                                    border: none;
                                    height: 30px;
                                    font-size: 18px;
                                    width:90px;"></a>
                                    <a href='./DeleteUser.php?id=<?php echo $result['id'] ?>' target="_blank"><input type='submit' value='Delete' class=' btn-danger shadow ' onClick='return checkdelete()' style="
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
</body>


<script>
    function checkdelete() {
        return confirm('Are You Sure You Want To Delete This Record ?');
    }
</script>

</html>