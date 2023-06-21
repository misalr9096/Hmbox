<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>
  <!-- ANIMATION  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <!-- FOR AFTER SCROLLING ANIMATION  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Cabin&family=Cormorant+Garamond:wght@300&family=Courgette&family=Great+Vibes&family=Kalam:wght@300&family=Nunito:ital,wght@0,700;1,600&family=Roboto:ital,wght@0,400;0,900;1,300&family=Tilt+Neon&family=Tilt+Warp&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../Css/index.css">
  <link rel="stylesheet" href="/Js/index.js">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <script src="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
  
</head>

<body>
  <!-- landing page  -->
  <div class='container-fluid ' id='header' style="overflow: hidden;">
    <header class="site-navbar site-navbar-target " role="banner">
      <div class="container ">
        <div class="row align-items-center position-relative ">
          <div class="col-lg-5 animate__animated wow animate__fadeInUp ">
            <nav class="site-navigation text-right ml-auto " role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li class="nav-item mt-2">
                  <a class="nav-link text-uppercase m-3" aria-current="page" href="#header">Home</a>
                </li>
                <li class="nav-item mt-1">
                  <a class="nav-link text-uppercase m-3" href="#typeOfcuisine">Type of cuisine</a>
                </li>
                <li class="nav-item mt-1">
                  <a class="nav-link text-uppercase m-3" href="#Services">Services</a>
                </li>
                <li class="nav-item mt-1">
                  <a class="nav-link text-uppercase m-3" href="#section-2">About us</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-2 text-center ">
            <div class="site-logo">
              <a href="index.html"><img src="../images/black-logo (2).png" class="img-fluid animate__animated wow animate__heartBeat" alt="..." style="max-height:60px;margin-left:20px;" /></a>
            </div>
            <button class=" toggle-button d-inline-block d-lg-none fs-1 m-5 " style="background: none; box-shadow: none; color: #262626; border: none;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class=" fa fs-solid fa-bars"></i></button>
          </div>
          <div class="col-lg-5 animate__animated wow animate__fadeInUp">
            <nav class="site-navigation text-left mr-auto " role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">

                <li class="nav-item mt-1">
                  <a class="nav-link text-uppercase m-3" href="#Gallery">Gallery</a>
                </li>
                <li class="nav-item mt-1">
                  <a class="nav-link text-uppercase m-3" href="./UserRegistration.php">Register</a>
                </li>
                <li class="nav-item mt-1">
                  <a class="nav-link text-uppercase m-3" href="./LoginPage.php">Login</a>
                </li>
                <li class="nav-item mt-1">
                  <div class="dropdown " style="display: inline-block;">
                    <div class="btn-group">
                      <a class=" dropdown  nav-link text-uppercase m-3" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color:#262626 ; font-family: 'Kalam', cursive; font-weight: bold; font-size: 18px;">
                        Logout
                      </a>
                      <ul class="dropdown-menu shadow " aria-labelledby="dropdownMenuButton" style="background: none;">
                        <li>
                          <div class="text-center d-flex justify-content-center align-items-center flex-column">
                            <h6 style="font-size: 15px;">Username</h6>
                            <?php
                            if (isset($_SESSION['username'])) {

                              $uname = $_SESSION['username'];

                              $sql = "select * from user_registration where email='" . $uname . "'";

                              $result = mysqli_query($conn, $sql);

                              while ($row = mysqli_fetch_array($result)) {
                                $image = $row['user_image'];
                              }

                              echo '<img src="photos/' . $image . '" alt="Example Image" height=50 width=50 class="rounded">';
                            } else {
                              echo ("Please Login..!");
                            }
                            ?>
                          </div>

                        </li>

                        <li><a class="dropdown-item text-center" href="./UserLogout.php">Logout</a></li>

                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="row " style="margin-top: 150px;">
      <div class="col-6  mt-5w-50 h-50 d-flex flex-column align-self-start animate__animated wow animate__heartBeat">
        <h3 class='display-5 mt-5 text-center' style="font-weight:500;font-family: 'Kalam' ; color: #262626;"> Fresh Food From</h3>
        <h1 class='display-4 mt-2 text-center' style="font-weight:200; color: #262626;">Our Kitchen To Your Tiffin</h1>

        <a href="../Pages/Enquire.php" class="d-block align-self-center">
          <button type="button" class="btn shadow align-self-center" style="border-radius:50px;height:50px;color:#262626;font-size:18px;background-color:#9ac9df;width:150px">Enquire Now</button></a>
      </div>
      <div class='col-6 '>


      </div>
    </div>



    <div class="offcanvas offcanvas-end offcanvas-menu" tabindex="1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color: #dcf1ff;">
      <div class="offcanvas-header">

      </div>
      <button type="button" class="btn-close text-reset m-5 shadow" style="order-radius:50px;height:50px;color:#262626;font-size:18px;background-color:#9ac9df;width:50px" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <div class="offcanvas-body">
        <nav class="site-navigation ml-auto d-flex justify-content-center " role="navigation">
          <ul class="site-menu main-menu js-clone-nav ml-auto " style="list-style-type: none;">
            <li class="nav-item item mt-1">
              <a class="nav-link text-uppercase m-1 d-block shadow p-3 rounded-3 " aria-current="page" style="font-Size:18px; color: #262626; font-family: 'Kalam', cursive; font-weight:bold; background-color: #9ac9df;" href="#header">Home</a>
            </li>
            <li class="nav-item  item mt-2">
              <a class="nav-link text-uppercase m-1 d-block shadow p-3 rounded-3 " style=" color: #262626; font-family: 'Kalam', cursive; font-weight:bold; background-color: #9ac9df;" href="#typeOfcuisine">Type of cuisine</a>
            </li>
            <li class="nav-item  item mt-2">
              <a class="nav-link text-uppercase m-1 d-block shadow p-3 rounded-3 " style="font-Size:18px; color: #262626; font-family: 'Kalam', cursive; font-weight:bold; background-color: #9ac9df;" href="#Services">Services</a>
            </li>
            <li class="nav-item item mt-2">
              <a class="nav-link text-uppercase m-1 d-block shadow p-3 rounded-3 " style="font-Size:18px; color: #262626; font-family: 'Kalam', cursive; font-weight:bold; background-color: #9ac9df; " href="#section-2">About us</a>
            </li>
            <li class="nav-item  item mt-2">
              <a class="nav-link text-uppercase m-1 d-block shadow p-3 rounded-3 " style="font-Size:18px; color: #262626; font-family: 'Kalam', cursive; font-weight:bold; background-color: #9ac9df;" href="#Gallery">Gallery</a>
            </li>
            <li class="nav-item item mt-2">
              <a class="nav-link text-uppercase m-1 d-block shadow p-3 rounded-3 " style="font-Size:18px; color: #262626; font-family: 'Kalam', cursive; font-weight:bold; background-color: #9ac9df;" href="./UserRegistration.php">Register</a>
            </li>
            <li class="nav-item item mt-2">
              <a class="nav-link text-uppercase m-1 d-block shadow p-3 rounded-3 " style="font-Size:18px; color: #262626; font-family: 'Kalam', cursive;font-weight:bold;background-color: #9ac9df;" href="./LoginPage.php">Login</a>
              
            </li>
            <li>  
            <div class="dropdown nav-item item mt-2" >
                    
                      <a class=" dropdown nav-link text-uppercase shadow p-3 rounded-3 " href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color:#262626 ; font-family: 'Kalam', cursive; font-weight: bold; font-size: 18px; text-decoration: none; background-color: #9ac9df ">Logout</a>

                      
                      <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton" style="background: #dcf1ff; ">
                        <li>
                          <div class="text-center d-flex justify-content-center align-items-center flex-column">
                            <h6 style="font-size: 15px;">Username</h6>
                            <?php
                            if (isset($_SESSION['username'])) {

                              $uname = $_SESSION['username'];

                              $sql = "select * from user_registration where email='" . $uname . "'";

                              $result = mysqli_query($conn, $sql);

                              while ($row = mysqli_fetch_array($result)) {
                                $image = $row['user_image'];
                              }

                              echo '<img src="./photos/' . $image . '" alt="Example Image" height=50 width=50 class="rounded">';
                            } else {
                              echo ("Please Login..!");
                            }
                            ?>
                          </div>

                        </li>

                        <li><a class="dropdown-item text-center" href="./UserLogout.php">Logout</a></li>

                      </ul>

                    </div>
                
            </li>

      </div>
    </div>
  </div>
  </div>
  </div>


  <!-------------------------------type-cuisine----------->
  <!-- -------------------------------------------------------------------------------------------------W -->
  <div class="container  d-flex flex-warp justify-content-center flex-column align-items-center" id="typeOfcuisine">
    <h1 class='display-5 text-center animate__animated wow animate__tada' id="heading" style="margin-top: 100px;">Types of Cuisine</h1>
    <div class="row cuisine-con">
      <div class="col-sm-12 col-lg-5 col-xl-5 col-md-12 m-5 animate__animated wow animate__backInLeft">
        <img src="../images/SouthIndianCuisine.webp" class="img-fluid mb-5 rounded" style="border: none;" alt="..." />
        <div class="card-body ">
          <h2 class="card-title text-center mt-3">South Indian Cuisine</h2>
          <p class="card-text text-center mt-3" style="font-Size:20px;font-family: 'Kalam';">South indian cuisine is simply delicious and easily digestible. It consists of dosa, idli, saaru/rasam, and huli/sambar.
          </p>
        </div>
      </div>
      <div class=" col-sm-12 col-lg-5 col-xl-5 col-md-12 m-5 animate__animated wow animate__backInRight ">
        <img src="../images/MaharashtrianCuisine.webp" class="img-fluid mb-5 rounded" style="border: none;" alt="..." />
        <div class="card-body ">
          <h2 class="card-title text-center mt-3">Maharashtra Cuisine</h2>
          <p class="card-text text-center mt-3" style="font-Size:20px;font-family: 'Kalam';">Maharashtrian food offers something for everyone, it consists dal, rice, roti, bhaji, puri and sweets.
          </p>
        </div>
      </div>

      <!-- Force next columns to break to new line -->
      <div class="w-100"></div>

      <div class=" col-sm-12 col-lg-5 col-xl-5 col-md-12 m-5 animate__animated wow animate__backInLeft ">
        <img src="../images/JainCuisine.webp" class="img-fluid shadow mb-5 rounded" style="border: none;" alt="..." />
        <div class="card-body ">
          <h2 class="card-title text-center mt-3">Jain Cuisine</h2>
          <p class="card-text text-center mt-3" style="font-Size:20px;font-family: 'Kalam';">Jain thali consists of vegetables, squash, beans, peas, fruits, and lettuce, and excludes onions and garlic, root vegetables.
          </p>
        </div>
      </div>
      <div class="col-sm-12 col-lg-5 col-xl-5 col-md-12 m-5 animate__animated wow animate__backInRight ">
        <img src="../images/gujrati.webp" class="img-fluid shadow mb-5 rounded" style="border: none;" alt="..." />
        <div class="card-body">
          <h2 class="card-title text-center mt-3">Gujarati Cuisine</h2>
          <p class="card-text text-center mt-3" style="font-Size:20px;font-family: 'Kalam';">Gujarati thali consists rotli, dal or kadhi, rice, and shaak/sabzi with different combinations of vegetables and spices.
          </p>

        </div>
      </div>
    </div>
  </div>

  <!----------------------------------- services--------------------------------------------------------------------------------------------------------------- -->

  <div class=" row  m-3 " id="Services">
    <h1 class="display-5 text-center animate__animated wow animate__tada " id="heading">
      Services
    </h1>
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 d-flex flex-warp justify-content-center animate__animated wow animate__backInUp">
      <div class="card service-card  shadow p-3 mb-5 bg-white">
        <img src="../images/Lunch Tiffin Service.webp" class="card-img-top rounded" id="service-img" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Lunch Tiffin Service</h5>
          <p class="card-text" style="font-family: 'Kalam'">
            Allow us to take care of your daily lunch, regardless if you’re
            at work or at home and Office.
          </p>
          <a href="./Enquire.html">
            <button type="button" class="btn shadow m-4" style="
                  border-radius: 50px;
                  height: 50px;
                  color: white;
                  font-size: 18px;
                  background-color: #9ac9df;
                  width: 150px;">
              Enquire Now
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 d-flex flex-warp justify-content-center animate__animated wow animate__backInUp">
      <div class="card service-card shadow p-3 mb-5 bg-white ">
        <img src="../images/Nutri-meal Lunch.webp" class="card-img-top rounded" id="service-img" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Nutri-meal Lunch </h5>
          <p class="card-text" style="font-family: 'Kalam'">
            What would you choose? Stale cooked hotel food or goodness and
            wholeness of nutritious food?
          </p>

          <a href="./Enquire.php">
            <button type="button" class="btn shadow m-4" style="
                    border-radius: 50px;
                    height: 50px;
                    color: white;
                    font-size: 18px;
                    background-color: #9ac9df;
                    width: 150px;">
              Enquire Now
            </button>
          </a>

        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 d-flex flex-warp justify-content-center animate__animated wow animate__backInUp">
      <div class="card service-card shadow p-3 mb-5 bg-white ">
        <img src="../images/Customised Tiffin.webp" class="card-img-top rounded" id="service-img" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Customised Tiffin</h5>
          <p class="card-text" style="font-family: 'Kalam'">
            Yes, you can virtually design your own meals and choose from
            plenty of options provided by us.
          </p>
          <a href="./Enquire.html">
            <button type="button" class="btn shadow m-4" style="
                  border-radius: 50px;
                  height: 50px;
                  color: white;
                  font-size: 18px;
                  background-color: #9ac9df;
                  width: 150px;">
              Enquire Now
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 d-flex flex-warp justify-content-center animate__animated wow animate__backInUp">
      <div class="card service-card shadow p-3 mb-5 bg-white ">
        <img src="../images/Corporate Catering.webp" class="card-img-top rounded" id="service-img" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Corporate Catering</h5>

          <p class="card-text" style="font-family: 'Kalam'">
            We make sure you bond well with your fellow colleagues over
            tasty and satiating food dishes.
          </p>
          <a href="./Enquire.html">
            <button type="button" class="btn shadow m-4" style="
                    border-radius: 50px;
                    height: 50px;
                    color: white;
                    font-size: 18px;
                    background-color: #9ac9df;
                    width: 150px;">
              Enquire Now
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
  <!-- -------Rete of tiffin ------------------------------------------------------------------------------------ -->
  <div class="row m-5 animate__animated wow animate__heartBeat">
    <div class="col-sm-12 col-lg-12 col-xl-12 col-md-5  mt-5 ">
      <img src="../images/RateBanner.webp" class="img-fluid d-block shadow mb-5 rounded-3 align-self-center" alt="">
    </div>

  </div>



  <!------------------------------------ about us---------------------------------------------------------------------------------------------------------------- -->
  <div class="row m-5 animate__animated wow animate__bounceIn" id="section-2">
    <div class="col-sm-12 col-lg-12 col-xl-12 col-md-5 animate__animated wow animate__bounceIn  ">

      <h1 class="display-4 text-center " id='heading'>About Us</h1>
      <img src="../images/registerbg.webp" class="img-fluid shadow mb-5 rounded"></img>
    </div>

    <div class="col-sm-12 col-lg-12 col-xl-12 col-md-5    ">
      <p class="fs-5 text-center">We, Tastepoint Tiffin Services, situated at Malad West, Mumbai, Maharashtra, offer pre-planned meal packages that a customer can customize to his liking. It is our endeavor to make sure that you enjoy homely cooked food at very affordable rates and hassle-free packages. We offer a wide array of meal options in vegetarian and non-vegetarian sections. Each option is not just finger-licking good but highly nutritious and prepared under very hygienic conditions.</p>
    </div>

  </div>

  </div>

  <!------------------------------------- gallery--------------------------------------------------------------------------------------------------------- -->

  <div class="container-fluid mt-5" id="Gallery">
    <h1 class="display-5 text-center aniamte__animaed animate__heartBeat " id="heading">
      Gallery
    </h1>
    <div class="row mt-5 animate__animated wow animate__zoomIn">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">

        <img src="../images/Gallery19.jpg" class="img-fluid  hover-zoomin">
        <img src="../images/Resize_Gallery17.jpg" class="img-fluid  hover-zoomin">
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <img src="../images/Gallery12.jpg" class="img-fluid  hover-zoomin">
        <img src="../images/Gallery6.jpeg" class="img-fluid  hover-zoomin">

      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <img src="../images/Gallery10.jpg" class="img-fluid  hover-zoomin">
        <img src="../images/Gallery16.jpg" class="img-fluid  hover-zoomin">

      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <img src="../images/Gallery14.jpg" class="img-fluid  hover-zoomin">
        <img src="../images/Gallery17.jpg" class="img-fluid  hover-zoomin">


      </div>
    </div>
  </div>
  <!----------------------------------------Testimonials--------------------------------------------------------------------------------------->
  <div class="testimonial-slider pb-5 pt-5 mt-5 animate__animated wow animate__fadeInLeft">
    <div id="carouselExampleControls" class="carousel carousel-dark" data-bs-ride="carousel">
      <div class="container-fluid ">
        <h1 class="display-5 text-center " id="heading">
          Testimonials
        </h1>
        <h2 class="text-center">What other say for us</h2>

        <h5 class="text-center mb-5">Our team created best opportunities for your business.</h5>
      </div>
    </div>

    <div class="container my-5 py-5  text-center  ">

      <!-- carousel slider starts  -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- under div contents 1 -->
            <div class="items shadow">
              <img src="../images/Men2.jpg" alt="Shahadat" class="shadow">
              <h4 class="mt-3">Ravi Kumar</h4>
              <p class="lead">Pune, Maharashtra</p>
              <div class="stars">
              
              </div>
              <q class="mt-2">Only one word would be suffice, "ghar jaisa khana" as I am very choosy and skeptical about what I am eating and from where delicious, simple and gold on all standards. Their tiffin service is the most affordable one with a variety of food to offer.</q>
            </div>
          </div>

          <!-- under div contents 2 -->

          <div class="carousel-item">
            <div class="items shadow">
              <img src="../images/Women1.jpg " class="shadow">
              <h4 class="mt-3">Samiksha Wasankar</h4>
              <p class="lead">Pune, Maharashtra</p>
              <div class="stars">
                
              </div>
              <q class="mt-2">This is one the best tiffin services. i would encourage everyone to try their food at least once. the food they provide reminded me of food made by mom, especially the paneer .and dal. also well blanced flavouring and spiciness. worth every penny! very good experience.</q>
            </div>
          </div>

          <!-- under div contents 3 -->
          <div class="carousel-item ">
            <div class="items shadow">
              <img src="../images/Men1.jpg" alt="mark" class="shadow">
              <h4 class="mt-3">Tanmay Bharaswadkar</h4>
              <p class="lead">Pune, Maharashtra</p>
              <div class="stars">
                
              </div>
              <q class="mt-2">My family had tested positive for covid 19. In these really tough and unprecedented times we have received a exceptionally good , safe, hygienic and nutritious service from Tiffin services. I would like to thank them for there kind help!!</q>
            </div>
          </div>
        </div>

        <!-- carousel bottom indicators  -->
        <div class="carousel-indicators mt-4 " style="width: 50px;">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <button class="carousel-control-prev shadow p-3 mb-5 bg-white " style="width: 50px; border-radius: 50%; position: absolute; top: 150px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next shadow p-3 mb-5 bg-white" type="button" style="width: 50px; border-radius: 50%; position: absolute; top: 150px;" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <!------------------------------------------------------ footer-------------------------------------------------------------------------------------- -->

  <footer class="deneb_footer mt-5 animate__animated wow animate__slideInUp">
    <div class="widget_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="widget widegt_about">
              <div class="widget_title">
                <img src="../images/black-logo (2).png" class="img-fluid " alt="" style="color: white; height: 100px; width: 150px;" />
              </div>
             
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="widget widget_link">
              <div class="widget_title">

              </div>

            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="widget widget_contact">
              <div class="widget_title">
                <h4>Contact Us</h4>
              </div>
              <div class="contact_info">
                <div class="single_info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class="info">
                    <p><a href="tel:+91997011865" style="text-decoration:none;">1800-121-3637</a></p>
                  </div>
                </div>
                <div class="single_info">
                  <div class="icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="info">
                    <p><a href="mailto:hmboxweb2023@gmail.com" style="text-decoration:none;">hmboxweb2023@gmail.com</a></p>

                  </div>
                </div>
                <div class="single_info">
                  <div class="icon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <div class="info" style=" Color: #262626">
                    <p>Sr. No. 39/15, Laxman Nagar, Matoshree Colony Road, Thergaon, Pune - 411033 (Near to Matoshree Hospital).</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright_text">
              <p>Copyright &copy; 2023 All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- SCRIPT FOR THE SCROLLING AFTER EFFECT ANIMATION  -->
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
  </script>

  <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
  <!-- <script src="js/popper.min.js"></script> -->
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <!-- <script src="js/jquery.sticky.js"></script> -->
  <!-- <script src="js/main.js"></script> -->
  <script>


  </script>
</body>

</html>