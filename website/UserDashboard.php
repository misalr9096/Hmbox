<?php
session_start();
require('./database.php');
if (!isset($_SESSION['username'])) {
    header("location : UserLogin.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="userdashboard.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap"
        rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>

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
    <div class="wrapper ">
        <!-- Sidebar -->
        <nav id="sidebar" class="shadow">
            <div class="sidebar-header">
                <div class="text-center">
                    <img src="../images/whilte-logo.png" style="width: 150px" alt="logo" />
                </div>
            </div>

            <ul class="list-unstyled components">
                <li class="active shadow m-3 text-center" style="background: #9AC9DF; border-radius: 10px;">
                    <a href="./Home.php" target="iframe">Home</a>
                </li>
                <li class="shadow m-3 text-center" style="background: #9AC9DF; border-radius: 10px;">
                    <a href="../NewOrder.php" target="iframe">New Order</a>
                </li>
                <li class="shadow m-3 text-center" style="background: #9AC9DF; border-radius: 10px;">
                    <a href="./ViewOrder.php" target="iframe" >View Order</a>
                </li>
                <li class="shadow m-3 text-center" style="background: #9AC9DF; border-radius: 10px;">
                    <a href="./Profile.php" target="iframe">Profile</a>
                </li>
                <li class="shadow m-3 text-center" style="background: #9AC9DF; border-radius: 10px;">
                    <a href="./ContactUs.php" target="iframe">Complaint</a>
                </li>
            </ul>
        </nav>
        <div style="width: 100%; height: 100%;">
            <div class="container-fluid " style="height: 712px;">
                <nav class="navbar navbar-expand-lg ">
                    <div class="g-0 w-100 row">
                        <div class="col-sm-4 col-md-5 ">
                          <button type="button" id="sidebarCollapse" type="button" class="btn shadow m-4" style="
                                height: 40px;
                                color: #262626;
                                font-size: 18px;
                                background-color: #9AC9DF;
                                width: 50px;
                                ">
                            <i class="fas fa-align-left"></i>
                          </button>
                        </div> 
                        
                        <div class="col-sm-7 col-md-7  d-flex justify-content-end">
                        <div class="dropdown m-4">

                            <button role="button" type="button" class="btn dropdown shadow  " data-toggle="dropdown" style="
                            height: 40px;
                            color: #262626;
                            font-size: 18px;
                            background-color: #9AC9DF;
                            max-width: 150px;">
                                <i class="fa-regular fa-user"></i> Account
                            </button>


                            <div class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton" style=" 
                            color: #262626;
                            font-size: 18px;
                            background-color: #9AC9DF;">
                                <a class="dropdown-item" href="./UserLogout.php">Logout</a>
                                <a class="dropdown-item" href="./index.php">Home</a>
                            <h6>
                          
                            </div>
                            </div>  
                        </div>
                    </div>
                </nav>
                <div class="row " style="height: 600px;">
                    <iframe name="iframe" class="col-lg-12 col-md-12 col-sm-12" src="./Home.php" width="100%"
                        height="100%" 
                        style="border: none ; height: 100%; width: 100%; margin: 0px;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function () {

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

        });
    </script>
</body>

</html>